<h1 class="title mt-4">Afspraak maken</h1>
<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (isset($success)) { ?>
    <p class="notification is-primary"><?= $success; ?></p>
<?php } ?>

<?php if (isset($reservation)): ?>
    <section class="columns">
        <form class="column is-6" action="" method="post" enctype="multipart/form-data">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="date">Datum</label>
                </div>
                <div class="field-body">
                    <input class="input" id="date" type="date" name="date" value="<?= $reservation->date; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="time">Tijd</label>
                </div>
                <div class="field-body">
                    <input class="input" id="time" type="time" name="time" value="<?= $reservation->time; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="barber">Kapper</label>
                </div>
                <div class="field-body">
                    <input class="input" id="barber" type="text" name="barber" value="<?= $reservation->barber; ?> Jan Marijn"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="type">soort knipbeurt</label>
                </div>
                <div class="field-body">
                   <select class="input " id="type" name="type">
                        <option value="0">Kies een soort knipbeurt</option>
                        <option value="kids knippen" <?= $reservation->type == "kids knippen" ? 'selected' : ''; ?>>kids knippen</option>
                        <option value="italian shave" <?= $reservation->type == "italian shave" ? 'selected' : ''; ?>>italian shave</option>
                        <option value="Knippen en quick beard" <?= $reservation->type == "Knippen en quick beard" ? 'selected' : ''; ?>>Knippen en quick beard</option>
                        <option value="knippen student" <?= $reservation->type == "knippen student" ? 'selected' : ''; ?>>knippen student</option>
                        <option value="tondeuse" <?= $reservation->type == "tondeuse" ? 'selected' : ''; ?>>tondeuse</option>
                        <option value="quick beard trim" <?= $reservation->type == "quick beard trim" ? 'selected' : ''; ?>>quick beard trim</option>
                        <option value="knippen" <?= $reservation->type == "knippen" ? 'selected' : ''; ?>>knippen</option>
                    </select>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                    <button class="button is-primary is-fullwidth" type="submit" name="submit">Opslaan</button>
                </div>
            </div>
        </form>
    </section>
<?php endif; ?>
<a class="button mt-4" href="<?= BASE_PATH; ?>home">&laquo; terug naar de homepage</a>

