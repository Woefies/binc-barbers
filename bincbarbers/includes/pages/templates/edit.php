<?php if (!empty($errors)): ?>
    <section class="content">
        <ul class="notification is-danger">
            <?php foreach ($errors as $error): ?>
                <li><?= $error; ?></li>
            <?php endforeach; ?>
        </ul>
    </section>
<?php endif; ?>

<?php if (isset($success)): ?>
    <p class="notification is-primary"><?= $success; ?></p>
<?php endif; ?>

<?php if (isset($reservation)): ?>
    <h1 class="title mt-4">Edit <em><?= $reservation->date . ' - ' . $reservation->barber; ?></em></h1>
    <section class="columns">
        <form class="column is-6" action="" method="post" enctype="multipart/form-data">
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="date">date</label>
                </div>
                <div class="field-body">
                    <input class="input" id="date" type="date" name="date" value="<?= $reservation->date; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="time">time</label>
                </div>
                <div class="field-body">
                    <input class="input" id="time" type="time" name="time" value="<?= $reservation->time; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="barber">barber</label>
                </div>
                <div class="field-body">
                    <input class="input" id="barber" type="text" name="barber" value="<?= $reservation->barber; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label" for="type">type</label>
                </div>
                <div class="field-body">
                    <input class="input" id="type" type="text" name="type" value="<?= $reservation->type; ?>"/>
                </div>
            </div>
            <div class="field is-horizontal">
                <div class="field-label is-normal"></div>
                <div class="field-body">
                    <button class="button is-primary is-fullwidth" type="submit" name="submit">Save</button>
                </div>
            </div>
        </form>
    </section>
<?php endif; ?>
<a class="button" href="<?= BASE_PATH; ?>home">&laquo; Go back to the list</a>
