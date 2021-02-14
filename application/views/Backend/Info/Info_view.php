<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Terbaru Cupang</title>
</head>

  <body>
    <a href="<?= base_url('Backend/Info/AddInfo') ?>">Tambah Info</a>
    <table class= "table">
      <thead>
        <tr>
          <th>#</th>
          <th>Judul</th>
          <th style="width:500px;">Isi</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
    <?php
        $no = 1;
        foreach ($info as $key) {
        ?>
    <tr>
          <th><?= $no++; ?></th>
          <td><?= $key->judul; ?></td>
          <td style="width:500px;"><?= $key->isi; ?></td>
          <td>
    <a href="<?= base_url('Backend/Info/Info_detail/' . $key->id_info); ?>" class="badge badge-primary">Detail</a>
    <a href="<?= base_url('Backend/Info/EditInfo/' . $key->id_info); ?>" class="badge badge-success">Edit</a> 
    <a href="<?= base_url('Backend/Info/DeleteInfo/' . $key->id_info); ?>" class="badge badge-danger" onclick="return confirm('sure??');">Delete</a>
     </td>
        </tr>
    <?php } ?>
      </tbody>
    </table>

  </body>

</html>