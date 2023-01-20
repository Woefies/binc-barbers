<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (isset($reservation)): ?>
    <h1 class="title mt-4"><?= $reservation->date . ' - ' . $reservation->type; ?></h1>
    <section class="content">
        <ul>
            <li>Date: <?= $reservation->date; ?></li>
            <li>Date: <?= $reservation->time; ?></li>
            <li>Barber: <?= $reservation->barber; ?></li>
            <li>Type: <?= $reservation->type; ?></li>
        </ul>
    </section>
    <a class="button mt-4" href="<?= BASE_PATH; ?>dashboard">Go back to the list</a>
<?php endif; ?>
