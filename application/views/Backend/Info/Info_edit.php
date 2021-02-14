<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Info</title>
</head>

<body>
    <?php foreach ($info as $key) { ?>
        <form action="<?php echo base_url('Backend/Info/UpdateInfo'); ?>" method="POST">
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <input type="hidden" name="id_jenis" value="<?= $key->id_jenis ?>">
                <input type="text" name="jenis" id="jenis" value="<?= $key->jenis ?>">
                <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
            </div>
            <button type="submit">Edit Jenis</button>
        </form>
    <?php } ?>
</body>

</html>