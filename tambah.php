<?php 
    require 'functions.php';

    if( isset($_POST["submit"]) ){
        // Cek Berhasil atau Tidak
        if( tambah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data Berhasil Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Ditambahkan');
                    document.location.href = 'index.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <h1>Tambah Menu</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="nama">Nama Menu </label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required name="nama_menu" id="nama"></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required name="jenis" id="jenis"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required name="harga" id="harga"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar </label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Tambah</button><button type="reset">Batal</button></td>
            </tr>
        </table>
    </form>
</body>
</html>