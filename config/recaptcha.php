<?php

declare(strict_types=1);

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

$allowedHostnames = array_values(array_filter(array_map(
    static fn (string $hostname): string => strtolower(trim($hostname)),
    explode(',', (string) $getEnv('RECAPTCHA_ALLOWED_HOSTNAMES', 'localhost'))
)));

return [
    'site_key' => trim((string) $getEnv('RECAPTCHA_SITE_KEY', '')),
    'secret_key' => trim((string) $getEnv('RECAPTCHA_SECRET_KEY', '')),
    'allowed_hostnames' => $allowedHostnames,
    'verify_url' => 'https://www.google.com/recaptcha/api/siteverify',
];
