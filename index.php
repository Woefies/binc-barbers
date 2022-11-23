<?php require_once 'includes/initialize.php';?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <title>Binc Barbers</title>
</head>
<body>
    <h1 class="title">Binc Barbers</h1>

    <?php if (isset($error)): ?>
        <span class="error"> <?= $error; ?></span>
    <?php endif; ?>
    <?php if (isset($customers)): ?>
        <table class="table">
            <thead>
            <tr>
                <th>#</th>
                <th>Naam:</th>
                <th>Achternaam:</th>
                <th>Address:</th>
                <th colspan="2"></th>
            </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
            <?php foreach ($customers as $index => $customer): ?>
                <tr>
                    <td><?=$index + 1?></td>
                    <td><?=$customer->name ?></td>
                    <td><?=$customer->lastname ?></td>
                    <td><?=$customer->address ?></td>
                    <td><a href="detail.php?customerNumber=<?= $index; ?>">Details</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
