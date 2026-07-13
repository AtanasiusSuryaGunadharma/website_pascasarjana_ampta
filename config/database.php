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

return [
    'host' => (string) $getEnv('DB_HOST', '127.0.0.1'),
    'port' => (int) $getEnv('DB_PORT', 3306),
    'database' => (string) $getEnv('DB_NAME', 'pascasarjana_ampta'),
    'username' => (string) $getEnv('DB_USERNAME', 'root'),
    'password' => (string) $getEnv('DB_PASSWORD', ''),
    'charset' => 'utf8mb4',
];
