<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Binc Barbers | <?= $pageTitle ?? ''; ?></title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<header>
    <nav class="navbar-end">
        <a href="<?= BASE_PATH; ?>home" class="navbar-item">Home</a>
        <a href="<?= BASE_PATH; ?>create"" class="navbar-item">afspraak maken</a>
        <a href="#" class="navbar-item">breda incorporated barbers</a>
        <a href="#" class="navbar-item">prijzen</a>
        <a href="#" class="navbar-item">contact</a>
        <?php
        /** @var System\Utils\Session $session */
        if (!$session->keyExists('user')): ?>
            <a href="<?= BASE_PATH; ?>login" class="navbar-item button is-primary">login</a>
        <?php endif;
        if ($session->keyExists('user')): ?>
            <a href="<?= BASE_PATH; ?>dashboard" class="navbar-item button is-primary">Dashboard</a>
            <a href="<?= BASE_PATH; ?>logout" class="navbar-item button is-light">Logout</a>
        <?php endif; ?>
    </nav>
</header>
<main>
    <div class="main-content">
        <?= $content ?? ''; ?>
    </div>
</main>
<footer>

</footer>
</body>
</html>
