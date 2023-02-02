<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "db_restoran");
    
    // Ambil data dari Table Menu
    $result = mysqli_query($conn, "SELECT * FROM tb_menu");

    // Ambil data (fetch) menu dari Object result
    // while( $menu = mysqli_fetch_assoc($result)){
    //     var_dump($menu);
    // }
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
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><img src="img/<?= $row["gambar"]; ?>"></td>
            <td><?= $row["nama_menu"]; ?></td>
            <td><?= $row["jenis"]; ?></td>
            <td><?= $row["harga"]; ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

    </table>
</body>
</html>