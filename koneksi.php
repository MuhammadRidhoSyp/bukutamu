<?php

    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database = "db_bukutamu";

    

    $koneksi = new mysqli($server, $user, $password, $nama_database);
    if (!$koneksi){
        die("gagal terhubung dengan database: " . $koneksi->error);
    }


?>