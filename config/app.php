<?php

declare(strict_types=1);

/**
 * Membaca environment variable dari Dotenv, server, atau runtime hosting.
 */
$getEnv = static function (string $key, mixed $default = null): mixed {
    if (array_key_exists($key, $_ENV)) {
        return $_ENV[$key];
    }

    if (array_key_exists($key, $_SERVER)) {
        return $_SERVER[$key];
    }

    $value = getenv($key);

    return $value === false ? $default : $value;
};

$appUrl = trim((string) $getEnv('APP_URL', ''));

if ($appUrl === '') {
    $forwardedProto = strtolower(trim(explode(',', (string) ($_SERVER['HTTP_X_FORWARDED_PROTO'] ?? ''))[0]));
    $isHttps = $forwardedProto === 'https'
        || (!empty($_SERVER['HTTPS']) && strtolower((string) $_SERVER['HTTPS']) !== 'off')
        || (int) ($_SERVER['SERVER_PORT'] ?? 80) === 443;

    $scheme = $isHttps ? 'https' : 'http';
    $forwardedHost = trim(explode(',', (string) ($_SERVER['HTTP_X_FORWARDED_HOST'] ?? ''))[0]);
    $host = $forwardedHost !== ''
        ? $forwardedHost
        : (string) ($_SERVER['HTTP_HOST'] ?? 'localhost');

    $isVercel = (string) $getEnv('VERCEL', '') === '1';
    $basePath = '';

    if (!$isVercel) {
        $scriptName = str_replace('\\', '/', (string) ($_SERVER['SCRIPT_NAME'] ?? ''));
        $basePath = rtrim(str_replace('/index.php', '', $scriptName), '/');
    }

    $appUrl = $scheme . '://' . $host . $basePath;
}

return [
    'name' => (string) $getEnv('APP_NAME', 'Pascasarjana STP AMPTA'),
    'env' => (string) $getEnv('APP_ENV', 'production'),
    'debug' => filter_var($getEnv('APP_DEBUG', false), FILTER_VALIDATE_BOOLEAN),
    'url' => rtrim($appUrl, '/'),
];
