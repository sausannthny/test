<?php 
require "koneksi.php";

    $id_buku = $_POST['id_buku'];
    $nama_buku = $_POST['nama_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $harga = $_POST['harga'];

    mysqli_query($conn, "UPDATE tb_buku SET nama_buku = '$nama_buku', penulis = '$penulis', penerbit = '$penerbit', harga = '$harga' WHERE id_buku = '$id_buku'");
    header("location:data_buku.php")
    ?>