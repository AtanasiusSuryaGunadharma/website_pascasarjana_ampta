<?php
$roleLabel = $user['role'] === 'super_admin' ? 'Super Admin' : 'Admin';
$initials = '';
foreach (preg_split('/\s+/', trim($user['name'])) ?: [] as $part) {
    $initials .= mb_strtoupper(mb_substr($part, 0, 1));
    if (mb_strlen($initials) >= 2) {
        break;
    }
}
$initials = $initials !== '' ? $initials : 'AU';
$lastLogin = $user['last_login_at'] !== null
    ? date('d M Y, H:i', strtotime($user['last_login_at']))
    : 'Login pertama';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?= htmlspecialchars($pageTitle) ?> | <?= htmlspecialchars($siteName) ?></title>
    <link rel="stylesheet" href="<?= htmlspecialchars($appConfig['url']) ?>/assets/css/dashboard.css?v=20260724">
</head>
<body class="admin-dashboard">
    <aside class="admin-sidebar" id="admin-sidebar" data-dashboard-sidebar>
        <div class="admin-sidebar-brand">
            <img src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png" alt="Logo STP AMPTA">
            <span>
                <strong>AMPTA</strong>
                <small>Admin Panel</small>
            </span>
        </div>

        <div class="admin-sidebar-user">
            <span class="admin-user-avatar"><?= htmlspecialchars($initials) ?></span>
            <span class="admin-user-copy">
                <strong><?= htmlspecialchars($user['name']) ?></strong>
                <small><?= htmlspecialchars($roleLabel) ?></small>
            </span>
        </div>

        <nav class="admin-navigation" aria-label="Navigasi dashboard">
            <p class="admin-nav-label">Utama</p>
            <a class="admin-nav-item is-active" href="<?= htmlspecialchars($appConfig['url']) ?>/dalaman/dashboard" aria-current="page">
                <span class="admin-nav-icon" aria-hidden="true">D</span>
                <span class="admin-nav-text">Dashboard</span>
            </a>

            <p class="admin-nav-label">Kelola Website</p>
            <?php
            $disabledMenus = [
                ['icon' => 'B', 'label' => 'Beranda'],
                ['icon' => 'DS', 'label' => 'Data Dosen'],
                ['icon' => 'P', 'label' => 'Info PMB'],
                ['icon' => 'F', 'label' => 'Fasilitas'],
                ['icon' => 'BR', 'label' => 'Berita'],
                ['icon' => 'A', 'label' => 'Alumni'],
            ];
            ?>
            <?php foreach ($disabledMenus as $menu): ?>
                <button class="admin-nav-item" type="button" disabled aria-disabled="true" title="Fitur belum tersedia">
                    <span class="admin-nav-icon" aria-hidden="true"><?= htmlspecialchars($menu['icon']) ?></span>
                    <span class="admin-nav-text"><?= htmlspecialchars($menu['label']) ?></span>
                    <span class="admin-nav-lock admin-nav-text" aria-hidden="true">•</span>
                </button>
            <?php endforeach; ?>

            <p class="admin-nav-label">Sistem</p>
            <button class="admin-nav-item" type="button" disabled aria-disabled="true" title="Fitur belum tersedia">
                <span class="admin-nav-icon" aria-hidden="true">U</span>
                <span class="admin-nav-text">Manajemen Pengguna</span>
                <span class="admin-nav-lock admin-nav-text" aria-hidden="true">•</span>
            </button>
            <button class="admin-nav-item" type="button" disabled aria-disabled="true" title="Fitur belum tersedia">
                <span class="admin-nav-icon" aria-hidden="true">S</span>
                <span class="admin-nav-text">Pengaturan</span>
                <span class="admin-nav-lock admin-nav-text" aria-hidden="true">•</span>
            </button>
        </nav>

        <div class="admin-sidebar-footer">
            <a href="<?= htmlspecialchars($appConfig['url']) ?>/" title="Kembali ke website">
                <span aria-hidden="true">←</span>
                <span class="admin-nav-text">Kembali ke Website</span>
            </a>
        </div>
    </aside>

    <div class="admin-sidebar-overlay" data-sidebar-overlay></div>

    <div class="admin-layout">
        <header class="admin-topbar">
            <div class="admin-topbar-heading">
                <button type="button" class="admin-menu-toggle" aria-controls="admin-sidebar" aria-expanded="true" data-sidebar-toggle>
                    <span></span><span></span><span></span>
                    <span class="sr-only">Tampilkan atau sembunyikan menu</span>
                </button>
                <div>
                    <p>Portal Dalaman</p>
                    <h1>Dashboard</h1>
                </div>
            </div>

            <div class="admin-topbar-actions">
                <div class="admin-date">
                    <span aria-hidden="true">●</span>
                    <div>
                        <small>Waktu server</small>
                        <strong><?= date('d M Y, H:i') ?> WIB</strong>
                    </div>
                </div>
                <form method="post" action="<?= htmlspecialchars($appConfig['url']) ?>/dalaman/logout">
                    <input type="hidden" name="_token" value="<?= htmlspecialchars($csrfToken) ?>">
                    <button type="submit" class="admin-logout-button">
                        <span aria-hidden="true">↪</span>
                        Keluar
                    </button>
                </form>
            </div>
        </header>

        <main class="admin-content">
            <section class="admin-welcome">
                <div>
                    <span class="admin-role-chip"><?= htmlspecialchars($roleLabel) ?></span>
                    <h2>Selamat datang, <?= htmlspecialchars($user['name']) ?>!</h2>
                    <p>Anda berhasil masuk ke area administrasi Pascasarjana STP AMPTA.</p>
                </div>
                <div class="admin-welcome-mark" aria-hidden="true">
                    <img src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png" alt="">
                </div>
            </section>

            <section class="admin-stat-grid" aria-label="Ringkasan akun">
                <article class="admin-stat-card admin-stat-card-blue">
                    <span class="admin-stat-icon" aria-hidden="true">U</span>
                    <div>
                        <p>Pengguna Aktif</p>
                        <strong><?= $userCount ?></strong>
                        <small>Akun admin terdaftar</small>
                    </div>
                </article>
                <article class="admin-stat-card admin-stat-card-green">
                    <span class="admin-stat-icon" aria-hidden="true">A</span>
                    <div>
                        <p>Admin</p>
                        <strong><?= $adminCount ?></strong>
                        <small>Role administrator</small>
                    </div>
                </article>
                <article class="admin-stat-card admin-stat-card-gold">
                    <span class="admin-stat-icon" aria-hidden="true">SA</span>
                    <div>
                        <p>Super Admin</p>
                        <strong><?= $superAdminCount ?></strong>
                        <small>Akses tingkat tertinggi</small>
                    </div>
                </article>
            </section>

            <div class="admin-dashboard-grid">
                <section class="admin-panel">
                    <header class="admin-panel-header">
                        <div>
                            <p>Aktivitas Akun</p>
                            <h2>Ringkasan Login</h2>
                        </div>
                        <span class="admin-panel-badge">Autentikasi aktif</span>
                    </header>
                    <div class="admin-login-activity">
                        <span class="admin-activity-icon" aria-hidden="true">✓</span>
                        <div>
                            <strong>Login ke sistem berhasil</strong>
                            <p>Session aman telah dibuat untuk akun <b><?= htmlspecialchars($user['username']) ?></b>.</p>
                        </div>
                        <time><?= date('H:i') ?> WIB</time>
                    </div>
                    <dl class="admin-account-details">
                        <div><dt>Nama pengguna</dt><dd><?= htmlspecialchars($user['username']) ?></dd></div>
                        <div><dt>Role akses</dt><dd><?= htmlspecialchars($roleLabel) ?></dd></div>
                        <div><dt>Login sebelumnya</dt><dd><?= htmlspecialchars($lastLogin) ?></dd></div>
                    </dl>
                </section>

                <section class="admin-panel">
                    <header class="admin-panel-header">
                        <div>
                            <p>Status Sistem</p>
                            <h2>Akses Dashboard</h2>
                        </div>
                    </header>
                    <div class="admin-system-list">
                        <div><span class="is-online"></span><p><strong>Database</strong><small>Terhubung</small></p></div>
                        <div><span class="is-online"></span><p><strong>Session Login</strong><small>Aktif</small></p></div>
                        <div><span class="is-pending"></span><p><strong>Captcha</strong><small>Tahap berikutnya</small></p></div>
                        <div><span class="is-pending"></span><p><strong>Modul Pengelolaan</strong><small>Belum diaktifkan</small></p></div>
                    </div>
                </section>
            </div>

            <aside class="admin-info-banner">
                <span aria-hidden="true">i</span>
                <div>
                    <strong>Dashboard tahap autentikasi</strong>
                    <p>Menu pengelolaan sengaja dinonaktifkan. Tahap ini hanya menguji login, session, role pengguna, perlindungan dashboard, dan logout.</p>
                </div>
            </aside>
        </main>
    </div>

    <script src="<?= htmlspecialchars($appConfig['url']) ?>/assets/js/dashboard.js?v=20260724"></script>
</body>
</html>
