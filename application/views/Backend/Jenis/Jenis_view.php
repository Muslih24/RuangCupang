<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jenis Cupang</title>
</head>

<body>
    <a href="<?= base_url('Backend/Jenis/AddJenis') ?>">Tambah Jenis</a>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Jenis</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
        <?php
        $no = 1;
        foreach ($jenis as $key) {
        ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $key->jenis ?></td>
                <td><?= $key->total ?></td>
                <td>
                    <a href="<?= base_url('Backend/Jenis/EditJenis/' . $key->id_jenis); ?>">Edit</a> |
                    <a href="<?= base_url('Backend/Jenis/DeleteJenis/' . $key->id_jenis); ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>