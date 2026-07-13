<?php

declare(strict_types=1);

use App\Core\Application;
use Dotenv\Dotenv;

define('BASE_PATH', dirname(__DIR__));

require BASE_PATH . '/vendor/autoload.php';

Dotenv::createImmutable(BASE_PATH)->safeLoad();

$app = new Application();
$router = $app->router();

require BASE_PATH . '/routes/web.php';

$app->run();
