<?php require_once 'includes/initialize.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <title>customer Collection</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
</head>
<body>
<div class="container">
    <h1 class="title mt-4">customer Collection</h1>

    <?php if (isset($customers) && isset($totalCustomers)): ?>
        <a class="button" href="add.php">Add new customer</a>
        <table class="table is-striped mt-4">
            <thead>
            <tr>

                <th>#</th>
                <th>name</th>
                <th>lastname</th>
                <th>email</th>
                <th>password</th>
                <th colspan=3"></th>
            </tr>
            </thead>
            <tfoot>
            <tr>
                <td colspan="10" class="has-text-centered">&copy; My Collection with <?= $totalCustomers; ?> customers</td>
            </tr>
            </tfoot>
            <tbody>
            <?php foreach ($customers as $customer): ?>
                <tr>
                    <td class="is-vcentered"><?= $customer->id; ?></td>
                    <td class="is-vcentered"><?= $customer->name; ?></td>
                    <td class="is-vcentered"><?= $customer->lastname; ?></td>
                    <td class="is-vcentered"><?= $customer->email; ?></td>
                    <td class="is-vcentered"><?= $customer->password; ?></td>
                    <td class="is-vcentered"><a href="detail.php?id=<?= $customer->id; ?>">Details</a></td>
                    <td class="is-vcentered"><a href="edit.php?id=<?= $customer->id; ?>">Edit</a></td>
                    <td class="is-vcentered"><a href="delete.php?id=<?= $customer->id; ?>">Delete</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
</div>
</body>
</html>
