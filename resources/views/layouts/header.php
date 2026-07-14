<?php
/** @var string $pageTitle */
/** @var string $siteName */
/** @var array{url:string} $appConfig */
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle) ?> | <?= htmlspecialchars($siteName) ?></title>
    <link rel="stylesheet" href="<?= htmlspecialchars($appConfig['url']) ?>/assets/css/app.css?v=20260714-alumni-pmb">
</head>
<body>
