<?php
require 'db.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data_artikel</title>
</head>
<body>
    <table border="1">
      <thead>
        <tr>
            <th>ID Artikel</th>
            <th>Penulis</th>
            <th>Tanggal</th>
            <th>Teks</th>
            <th>Gambar</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach(tampilDataArtikel() as $x){?>
        <tr>
            <td><?php echo $x['id_artikel']?></td>
            <td><?php echo $x['penulis']?></td>
            <td><?php echo $x['tanggal']?></td>
            <td><?php echo $x['teks']?></td>
            <td><?php echo $x['gambar']?></td>
            
        </tr>
        <?php } ?>
      </tbody>
    </table>

</body>
</html>