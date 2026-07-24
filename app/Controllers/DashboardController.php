<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Database;
use App\Core\Session;
use Throwable;

final class DashboardController
{
    public function index(): void
    {
        Session::start();

        /** @var array{name:string,env:string,debug:bool,url:string} $appConfig */
        $appConfig = require BASE_PATH . '/config/app.php';

        if (!isset($_SESSION['auth_user']) || !is_array($_SESSION['auth_user'])) {
            header('Location: ' . $appConfig['url'] . '/dalaman/login');
            exit;
        }

        /** @var array{id:int,name:string,username:string,role:string,last_login_at:?string} $user */
        $user = $_SESSION['auth_user'];
        $pageTitle = 'Dashboard';
        $siteName = $appConfig['name'];
        $csrfToken = Session::csrfToken();
        $userCount = 0;
        $adminCount = 0;
        $superAdminCount = 0;

        try {
            $counts = Database::connection()->query(
                "SELECT
                    COUNT(*) AS total,
                    SUM(role = 'admin') AS admins,
                    SUM(role = 'super_admin') AS super_admins
                 FROM admin_users
                 WHERE is_active = 1"
            )->fetch();

            if (is_array($counts)) {
                $userCount = (int) $counts['total'];
                $adminCount = (int) $counts['admins'];
                $superAdminCount = (int) $counts['super_admins'];
            }
        } catch (Throwable) {
            // Dashboard tetap dapat dirender jika statistik belum tersedia.
        }

        require BASE_PATH . '/resources/views/internal/dashboard.php';
    }
}
