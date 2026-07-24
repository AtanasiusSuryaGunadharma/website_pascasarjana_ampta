<?php

declare(strict_types=1);

use App\Controllers\HomeController;
use App\Controllers\InternalAccessController;
use App\Controllers\LecturerController;
use App\Core\Router;

/** @var Router $router */
$router->get('/', [HomeController::class, 'index']);
$router->get('/dosen', [LecturerController::class, 'index']);
$router->get('/dalaman', [InternalAccessController::class, 'login']);
$router->get('/dalaman/login.php', [InternalAccessController::class, 'login']);
