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

    public function post(string $path, callable|array $handler): void
    {
        $this->routes['POST'][$this->normalizePath($path)] = $handler;
    }

    public function dispatch(string $method, string $uri): void
    {
        $requestPath = (string) (parse_url($uri, PHP_URL_PATH) ?? '/');
        $basePath = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? ''));

        if ($basePath !== '/' && $basePath !== '.' && str_starts_with($requestPath, $basePath)) {
            $requestPath = substr($requestPath, strlen($basePath)) ?: '/';
        }

        // Mendukung front controller lokal dan rewrite Vercel ke api/index.php.
        foreach (['/api/index.php', '/public/index.php', '/index.php'] as $frontController) {
            if ($requestPath === $frontController) {
                $requestPath = '/';
                break;
            }

            if (str_starts_with($requestPath, $frontController . '/')) {
                $requestPath = substr($requestPath, strlen($frontController)) ?: '/';
                break;
            }
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
