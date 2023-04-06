<?php 
require "koneksi.php";

    $nama_pelanggan = $_POST['nama_pelanggan'];
    $alamat = $_POST['alamat'];
    //query insert
    $sql = "INSERT INTO tb_pelanggan VALUES ('', '$nama_pelanggan','$alamat')";

    mysqli_query($conn, $sql );
    header("location: form_pelanggan.php");
?>