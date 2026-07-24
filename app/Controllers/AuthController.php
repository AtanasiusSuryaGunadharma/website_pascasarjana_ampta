<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Database;
use App\Core\Session;
use PDO;
use Throwable;

final class AuthController
{
    public function showLogin(): void
    {
        Session::start();
        $appConfig = $this->appConfig();

        if (isset($_SESSION['auth_user'])) {
            $this->redirect($appConfig['url'] . '/dalaman/dashboard');
        }

        $pageTitle = 'Portal Dalaman';
        $siteName = $appConfig['name'];
        $csrfToken = Session::csrfToken();
        $errorMessage = Session::pullFlash('error');
        $successMessage = Session::pullFlash('success');
        $oldUsername = Session::pullFlash('old_username') ?? '';

        require BASE_PATH . '/resources/views/internal/login.php';
    }

    public function authenticate(): void
    {
        Session::start();
        $appConfig = $this->appConfig();
        $loginUrl = $appConfig['url'] . '/dalaman/login';

        $username = trim((string) ($_POST['username'] ?? ''));
        $password = (string) ($_POST['password'] ?? '');

        if (!Session::csrfIsValid(isset($_POST['_token']) ? (string) $_POST['_token'] : null)) {
            Session::flash('error', 'Sesi formulir telah berakhir. Silakan muat ulang halaman dan coba lagi.');
            $this->redirect($loginUrl);
        }

        if ($username === '' || $password === '') {
            Session::flash('error', 'Username dan kata sandi wajib diisi.');
            Session::flash('old_username', $username);
            $this->redirect($loginUrl);
        }

        try {
            $statement = Database::connection()->prepare(
                'SELECT id, name, username, password_hash, role, is_active, last_login_at
                 FROM admin_users
                 WHERE username = :username
                 LIMIT 1'
            );
            $statement->execute(['username' => $username]);
            $user = $statement->fetch();
        } catch (Throwable) {
            Session::flash('error', 'Tabel akun admin belum tersedia. Impor database/admin_auth_schema.sql terlebih dahulu.');
            Session::flash('old_username', $username);
            $this->redirect($loginUrl);
        }

        $isValidUser = is_array($user)
            && (int) $user['is_active'] === 1
            && password_verify($password, (string) $user['password_hash']);

        if (!$isValidUser) {
            Session::flash('error', 'Username atau kata sandi tidak sesuai.');
            Session::flash('old_username', $username);
            $this->redirect($loginUrl);
        }

        session_regenerate_id(true);
        $_SESSION['auth_user'] = [
            'id' => (int) $user['id'],
            'name' => (string) $user['name'],
            'username' => (string) $user['username'],
            'role' => (string) $user['role'],
            'last_login_at' => $user['last_login_at'] !== null ? (string) $user['last_login_at'] : null,
        ];
        $_SESSION['_csrf'] = bin2hex(random_bytes(32));

        $update = Database::connection()->prepare(
            'UPDATE admin_users SET last_login_at = NOW() WHERE id = :id'
        );
        $update->execute(['id' => (int) $user['id']]);

        $this->redirect($appConfig['url'] . '/dalaman/dashboard');
    }

    public function logout(): void
    {
        Session::start();
        $appConfig = $this->appConfig();

        if (!Session::csrfIsValid(isset($_POST['_token']) ? (string) $_POST['_token'] : null)) {
            http_response_code(419);
            echo 'Sesi tidak valid. Silakan kembali dan coba lagi.';
            return;
        }

        $_SESSION = [];

        if (ini_get('session.use_cookies')) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000, $params['path'], $params['domain'], $params['secure'], $params['httponly']);
        }

        session_destroy();
        Session::start();
        Session::flash('success', 'Anda berhasil keluar dari Portal Dalaman.');

        $this->redirect($appConfig['url'] . '/dalaman/login');
    }

    /** @return array{name:string,env:string,debug:bool,url:string} */
    private function appConfig(): array
    {
        /** @var array{name:string,env:string,debug:bool,url:string} $config */
        $config = require BASE_PATH . '/config/app.php';
        return $config;
    }

    private function redirect(string $url): never
    {
        header('Location: ' . $url);
        exit;
    }
}
