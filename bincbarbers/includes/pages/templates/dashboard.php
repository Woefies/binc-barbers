<h1 class="title mt-4">Reservation Collection</h1>
<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (isset($reservations) && isset($totalReservations)): ?>
    <a class="button" href="<?= BASE_PATH; ?>create">Create new reservation</a>
    <table class="table is-striped mt-4">
        <thead>
        <tr>

            <th>#</th>
            <th>Date</th>
            <th>time</th>
            <th>Barber</th>
            <th>Type</th>
            <th colspan=3"></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($reservations as $reservation): ?>
            <tr>
                <td class="is-vcentered"><?= $reservation->id; ?></td>
                <td class="is-vcentered"><?= $reservation->date; ?></td>
                <td class="is-vcentered"><?= $reservation->time; ?></td>
                <td class="is-vcentered"><?= $reservation->barber; ?></td>
                <td class="is-vcentered"><?= $reservation->type; ?></td>
                <td class="is-vcentered"><a href="<?= BASE_PATH; ?>detail?id=<?= $reservation->id; ?>">Details</a></td>
                <td class="is-vcentered"><a href="<?= BASE_PATH; ?>edit?id=<?= $reservation->id; ?>">Edit</a></td>
                <td class="is-vcentered"><a href="<?= BASE_PATH; ?>delete?id=<?= $reservation->id; ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
