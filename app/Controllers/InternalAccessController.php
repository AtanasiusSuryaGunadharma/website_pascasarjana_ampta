<?php

declare(strict_types=1);

namespace App\Controllers;

final class InternalAccessController
{
    public function login(): void
    {
        /** @var array{name:string,env:string,debug:bool,url:string} $appConfig */
        $appConfig = require BASE_PATH . '/config/app.php';

        $pageTitle = 'Portal Dalaman';
        $siteName = $appConfig['name'];

        require BASE_PATH . '/resources/views/internal/login.php';
    }
}
