<?php 
require "koneksi.php";

    $id_pelanggan = $_POST['id_pelanggan'];
    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn, "UPDATE tb_pelanggan SET nama_pelanggan = '$nama_pelanggan', alamat = '$alamat' WHERE id_pelanggan = '$id_pelanggan'");
    header("location:data_pelanggan.php")
    ?>