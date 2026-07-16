<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Database;
use Throwable;

final class HomeController
{
    public function index(): void
    {
        /** @var array{name:string,env:string,debug:bool,url:string} $appConfig */
        $appConfig = require BASE_PATH . '/config/app.php';

        $pageTitle = 'Beranda';
        $currentPage = 'home';
        $siteName = $appConfig['name'];
        $tagline = 'Program Pascasarjana Pariwisata dan Perhotelan';
        $databaseConnected = false;
        $databaseError = null;

        try {
            $statement = Database::connection()->query(
                'SELECT site_name, tagline FROM site_settings WHERE id = 1 LIMIT 1'
            );
            $settings = $statement->fetch();

            if (is_array($settings)) {
                $siteName = (string) $settings['site_name'];
                $tagline = (string) $settings['tagline'];
            }

            $databaseConnected = true;
        } catch (Throwable $exception) {
            if ($appConfig['debug']) {
                $databaseError = $exception->getMessage();
            }
        }

        require BASE_PATH . '/resources/views/home/index.php';
    }
}
