<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <title><?= htmlspecialchars($pageTitle) ?> | <?= htmlspecialchars($siteName) ?></title>
    <link rel="stylesheet" href="<?= htmlspecialchars($appConfig['url']) ?>/assets/css/login.css?v=20260724-remember">
    <?php if ($recaptchaSiteKey !== ''): ?>
        <script src="https://www.google.com/recaptcha/api.js?hl=id" async defer></script>
    <?php endif; ?>
</head>
<body class="internal-login-page">
    <header class="internal-login-topbar">
        <a class="internal-login-brand" href="<?= htmlspecialchars($appConfig['url']) ?>/" aria-label="Pascasarjana STP AMPTA - Beranda">
            <img src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png" alt="Logo STP AMPTA">
            <span>
                <strong>Pascasarjana STP AMPTA</strong>
                <small>Yogyakarta</small>
            </span>
        </a>

        <a class="internal-login-back" href="<?= htmlspecialchars($appConfig['url']) ?>/">
            <span aria-hidden="true">←</span>
            Kembali ke Beranda
        </a>
    </header>

    <main class="internal-login-main">
        <video class="internal-login-video" autoplay muted loop playsinline aria-hidden="true">
            <source src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/bg_video_login.mp4" type="video/mp4">
        </video>
        <div class="internal-login-backdrop" aria-hidden="true"></div>

        <section class="internal-login-shell" aria-labelledby="internal-login-title">
            <div class="internal-login-intro">
                <img src="<?= htmlspecialchars($appConfig['url']) ?>/assets/images/logo_bulat.png" alt="Logo STP AMPTA">
                <div>
                    <p>Area Internal Pascasarjana</p>
                    <h1 id="internal-login-title">Portal Dalaman</h1>
                    <span>STP AMPTA Yogyakarta</span>
                </div>
            </div>

            <div class="internal-login-card">
                <div class="internal-login-card-heading">
                    <span class="internal-login-eyebrow">Akses Terbatas</span>
                    <h2>Masuk ke Sistem</h2>
                    <p>Gunakan akun internal Anda untuk melanjutkan.</p>
                </div>

                <form
                    class="internal-login-form"
                    method="post"
                    action="<?= htmlspecialchars($appConfig['url']) ?>/dalaman/login"
                    data-login-form
                >
                    <input type="hidden" name="_token" value="<?= htmlspecialchars($csrfToken) ?>">

                    <?php if ($errorMessage !== null): ?>
                        <div class="internal-login-alert internal-login-alert-error" role="alert">
                            <?= htmlspecialchars($errorMessage) ?>
                        </div>
                    <?php endif; ?>

                    <?php if ($successMessage !== null): ?>
                        <div class="internal-login-alert internal-login-alert-success" role="status">
                            <?= htmlspecialchars($successMessage) ?>
                        </div>
                    <?php endif; ?>

                    <label class="internal-login-field">
                        <span>Username</span>
                        <span class="internal-login-input-wrap">
                            <span class="internal-login-input-icon" aria-hidden="true">@</span>
                            <input
                                type="text"
                                name="username"
                                value="<?= htmlspecialchars($oldUsername) ?>"
                                placeholder="Masukkan username"
                                autocomplete="username"
                                maxlength="80"
                                autofocus
                                required
                            >
                        </span>
                    </label>

                    <label class="internal-login-field">
                        <span>Kata Sandi</span>
                        <span class="internal-login-input-wrap">
                            <span class="internal-login-input-icon internal-login-lock" aria-hidden="true"></span>
                            <input id="internal-login-password" type="password" name="password" placeholder="Masukkan kata sandi" autocomplete="current-password" required>
                            <button type="button" class="internal-password-toggle" aria-controls="internal-login-password" aria-pressed="false" data-password-toggle>Lihat</button>
                        </span>
                    </label>

                    <div class="internal-login-preferences">
                        <label class="internal-remember-option">
                            <input type="checkbox" name="remember_username" value="1" data-remember-username>
                            <span class="internal-remember-box" aria-hidden="true"></span>
                            <span>
                                <strong>Ingat username &amp; kata sandi</strong>
                                <small>Kata sandi disimpan aman oleh pengelola sandi browser</small>
                            </span>
                        </label>
                    </div>

                    <?php if ($recaptchaSiteKey !== ''): ?>
                        <div class="internal-recaptcha-wrap">
                            <div
                                class="g-recaptcha"
                                data-sitekey="<?= htmlspecialchars($recaptchaSiteKey) ?>"
                                data-theme="light"
                            ></div>
                        </div>
                    <?php else: ?>
                        <div class="internal-login-alert internal-login-alert-error" role="alert">
                            Konfigurasi captcha belum tersedia. Hubungi pengelola sistem.
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="internal-login-submit">Masuk ke Dalaman</button>
                </form>
            </div>
        </section>
    </main>

    <footer class="internal-login-footer">
        <p>&copy; <?= date('Y') ?> Pascasarjana STP AMPTA Yogyakarta</p>
        <span>Portal internal program pascasarjana</span>
    </footer>

    <script src="<?= htmlspecialchars($appConfig['url']) ?>/assets/js/login.js?v=20260724-remember"></script>
</body>
</html>
