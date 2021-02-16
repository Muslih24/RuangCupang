<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Info</title>
</head>
<form action="<?php echo base_url('Backend/Info/ProsesAddInfo'); ?>" method="POST">
    <div class="form-group">
        <label for="info">Info</label>
        <input type="hidden" name="id_info">
        <input type="text" name="info" id="info">
        <small class="form-text text-danger"><?= form_error('info'); ?></small>
    </div>
    <button type="submit">Tambah Info</button>
</form>


<body>
</body>

</html>