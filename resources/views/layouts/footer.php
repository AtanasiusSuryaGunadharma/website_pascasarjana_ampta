<footer class="site-footer" id="site-footer">
    <div class="container footer-content">
        <div>
            <p class="footer-title"><?= htmlspecialchars($siteName) ?></p>
            <p class="footer-text">Prototype UI awal website Pascasarjana STP AMPTA Yogyakarta.</p>
        </div>
        <p class="footer-copy">&copy; <?= date('Y') ?> <?= htmlspecialchars($siteName) ?>.</p>
    </div>
</footer>

<script src="<?= htmlspecialchars($appConfig['url']) ?>/assets/js/app.js"></script>
</body>
</html>
