<?php 
    require 'functions.php';
    $menu = query("SELECT * FROM tb_menu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        img{
            width: 80px;
        }
    </style>
</head>
<body>
    <h1>Daftar Menu</h1>
    <a href="tambah.php">Tambah Data</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Jenis</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($menu as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>"></td>
            <td><?= $row["nama_menu"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td>
                <a href="ubah.php?id_menu=<?= $row["id_menu"] ?>">Ubah</a> |
                <a href="hapus.php?id_menu=<?= $row["id_menu"]; ?>">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>