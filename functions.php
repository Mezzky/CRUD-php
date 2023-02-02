<?php 
    // Koneksi ke Database
    $conn = mysqli_connect("localhost", "root", "", "db_restoran");

    // READ
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while( $row = mysqli_fetch_assoc($result) ){
            $rows[] = $row;
        }
        return $rows;
    }

    // CREATE
    function tambah($data){
        global $conn;

        $nama = htmlspecialchars($data["nama_menu"]);
        $jenis = htmlspecialchars($data["jenis"]);
        $harga = htmlspecialchars($data["harga"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // Query Insert data
        $query = "INSERT INTO tb_menu VALUES ('', '$gambar', '$nama', '$jenis', '$harga')";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // DELETE
    function hapus($id){
        global $conn;
        mysqli_query($conn, "DELETE FROM tb_menu WHERE id_menu = $id");
        return mysqli_affected_rows($conn);
    }

    // UPDATE
    function ubah($data){
        global $conn;

        $id = $data["id_menu"];
        $nama = htmlspecialchars($data["nama_menu"]); 
        $jenis = htmlspecialchars($data["jenis"]);
        $harga = htmlspecialchars($data["harga"]);
        $gambar = htmlspecialchars($data["gambar"]);

        // Query Update Data
        $query = "UPDATE tb_menu SET 
                    nama_menu = '$nama',
                    jenis = '$jenis',
                    harga = '$harga',
                    gambar = '$gambar'
                WHERE id_menu = $id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>