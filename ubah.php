<?php 
    require 'functions.php';

    // ambil data di URL
    $id = $_GET["id_menu"];
    
    $mkn = query("SELECT * FROM tb_menu WHERE id_menu = $id")[0];

    if( isset($_POST["submit"]) ){
        // Cek Berhasil atau Tidak
        if( ubah($_POST) > 0 ){
            echo "
                <script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'index.php';
                </script>
            ";
        } else{
            echo "
                <script>
                    alert('Data Gagal Diubah');
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
    <title>Ubah Data</title>
</head>
<body>
    <h1>Ubah Menu</h1>
    <form action="" method="post">
        <input type="hidden" name="id_menu" value="<?= $mkn["id_menu"] ?>">
        <table>
            <tr>
                <td><label for="nama">Nama Menu </label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required value="<?= $mkn["nama_menu"] ?>" name="nama_menu" id="nama"></td>
            </tr>
            <tr>
                <td><label for="jenis">Jenis</label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required value="<?= $mkn["jenis"] ?>" name="jenis" id="jenis"></td>
            </tr>
            <tr>
                <td><label for="harga">Harga</label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required value="<?= $mkn["harga"] ?>" name="harga" id="harga"></td>
            </tr>
            <tr>
                <td><label for="gambar">Gambar </label></td>
                <td>:</td>
                <td><input type="text" autocomplete="off" required value="<?= $mkn["gambar"] ?>" name="gambar" id="gambar"></td>
            </tr>
            <tr>
                <td><button type="submit" name="submit">Ubah</button><button type="reset">Batal</button></td>
            </tr>
        </table>
    </form>
</body>
</html>