<?php

declare(strict_types=1);

use App\Controllers\AuthController;
use App\Controllers\DashboardController;
use App\Controllers\HomeController;
use App\Controllers\LecturerController;
use App\Core\Router;

/** @var Router $router */
$router->get('/', [HomeController::class, 'index']);
$router->get('/dosen', [LecturerController::class, 'index']);
$router->get('/dalaman', [AuthController::class, 'showLogin']);
$router->get('/dalaman/login', [AuthController::class, 'showLogin']);
$router->get('/dalaman/login.php', [AuthController::class, 'showLogin']);
$router->post('/dalaman/login', [AuthController::class, 'authenticate']);
$router->get('/dalaman/dashboard', [DashboardController::class, 'index']);
$router->post('/dalaman/logout', [AuthController::class, 'logout']);
