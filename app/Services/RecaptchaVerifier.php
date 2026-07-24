<?php

declare(strict_types=1);

namespace App\Services;

use JsonException;

final class RecaptchaVerifier
{
    public function verify(string $token, ?string $remoteIp = null): bool
    {
        $token = trim($token);

        if ($token === '' || !function_exists('curl_init')) {
            return false;
        }

        /** @var array{site_key:string,secret_key:string,allowed_hostnames:list<string>,verify_url:string} $config */
        $config = require BASE_PATH . '/config/recaptcha.php';

        if ($config['secret_key'] === '' || $config['allowed_hostnames'] === []) {
            return false;
        }

        $payload = [
            'secret' => $config['secret_key'],
            'response' => $token,
        ];

        if (is_string($remoteIp) && filter_var($remoteIp, FILTER_VALIDATE_IP)) {
            $payload['remoteip'] = $remoteIp;
        }

        $curl = curl_init($config['verify_url']);

        if ($curl === false) {
            return false;
        }

        curl_setopt_array($curl, [
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => http_build_query($payload),
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 4,
            CURLOPT_TIMEOUT => 8,
            CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
        ]);

        $response = curl_exec($curl);
        $statusCode = (int) curl_getinfo($curl, CURLINFO_RESPONSE_CODE);
        curl_close($curl);

        if (!is_string($response) || $statusCode !== 200) {
            return false;
        }

        try {
            /** @var mixed $decoded */
            $decoded = json_decode($response, true, 16, JSON_THROW_ON_ERROR);
        } catch (JsonException) {
            return false;
        }

        if (!is_array($decoded) || ($decoded['success'] ?? false) !== true) {
            return false;
        }

        $hostname = strtolower(trim((string) ($decoded['hostname'] ?? '')));

        return in_array($hostname, $config['allowed_hostnames'], true);
    }
}
