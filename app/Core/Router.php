<?php

declare(strict_types=1);

namespace App\Core;

final class Router
{
    /** @var array<string, array<string, callable|array{0:class-string,1:string}>> */
    private array $routes = [];

    public function get(string $path, callable|array $handler): void
    {
        $this->routes['GET'][$this->normalizePath($path)] = $handler;
    }

    public function dispatch(string $method, string $uri): void
    {
        $requestPath = (string) (parse_url($uri, PHP_URL_PATH) ?? '/');
        $basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));

        if ($basePath !== '/' && $basePath !== '.' && str_starts_with($requestPath, $basePath)) {
            $requestPath = substr($requestPath, strlen($basePath)) ?: '/';
        }

        $path = $this->normalizePath($requestPath);
        $handler = $this->routes[strtoupper($method)][$path] ?? null;

        if ($handler === null) {
            http_response_code(404);
            $pageTitle = 'Halaman tidak ditemukan';
            require BASE_PATH . '/resources/views/errors/404.php';
            return;
        }

        if (is_array($handler)) {
            [$controllerClass, $action] = $handler;
            $controller = new $controllerClass();
            $controller->{$action}();
            return;
        }

        $handler();
    }

    private function normalizePath(string $path): string
    {
        $path = '/' . trim($path, '/');
        return $path === '//' ? '/' : $path;
    }
}
