<?php

declare(strict_types=1);

namespace App\Controllers;

final class LecturerController
{
    public function index(): void
    {
        /** @var array{name:string,env:string,debug:bool,url:string} $appConfig */
        $appConfig = require BASE_PATH . '/config/app.php';

        $pageTitle = 'Dosen dan Bidang Keahlian';
        $siteName = $appConfig['name'];
        $currentPage = 'lecturers';

        require BASE_PATH . '/resources/views/lecturers/index.php';
    }
}
