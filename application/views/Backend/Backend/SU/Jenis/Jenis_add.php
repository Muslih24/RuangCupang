<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jenis</title>
</head>

<body>
    <form action="<?php echo base_url('Backend/Jenis/ProsesAddJenis'); ?>" method="POST">
        <div class="form-group">
            <label for="jenis">Jenis</label>
            <input type="hidden" name="id_jenis">
            <input type="text" name="jenis" id="jenis">
            <small class="form-text text-danger"><?= form_error('jenis'); ?></small>
        </div>
        <button type="submit">Tambah Jenis</button>
    </form>

</body>

</html>