<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">

    <title>Jenis</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
    <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" />
    <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />
    <link href="assets/img/favicon.png" rel="shortcut icon" />
    <script src="assets/plugins/nprogress/nprogress.js"></script>
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
                    <a href="<?= base_url('Backend/Jenis/DetailJenis/' . $key->id_jenis); ?>">Detail</a> |
                    <a href="<?= base_url('Backend/Jenis/EditJenis/' . $key->id_jenis); ?>">Edit</a> |
                    <a href="<?= base_url('Backend/Jenis/DeleteJenis/' . $key->id_jenis); ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>