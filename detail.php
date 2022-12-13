<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>Music Collection Details</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container px-4">
    <?php if (!empty($errors)): ?>
        <section class="content">
            <ul class="notification is-danger">
                <?php foreach ($errors as $error): ?>
                    <li><?= $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </section>
    <?php endif; ?>

    <?php if (isset($customer)): ?>
        <h1 class="title mt-4"><?= $customer->name . ' - ' . $customer->lastname; ?></h1>
        <section class="content">
            <ul>
                <li>email: <?= $customer->email; ?></li>
                <li>password: <?= $customer->password; ?></li>

            </ul>
        </section>
        <a class="button mt-4" href="index.php">Go back to the list</a>
    <?php endif; ?>
</div>
</body>
</html>
