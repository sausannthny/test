<?php
require "koneksi.php";

$result_pelanggan = mysqli_query($conn, "SELECT id_pelanggan, nama_pelanggan FROM tb_pelanggan");
$result_buku = mysqli_query($conn, "SELECT id_buku, nama_buku, harga FROM tb_buku");
$options_pelanggan = mysqli_fetch_all($result_pelanggan, MYSQLI_ASSOC);
$options_buku = mysqli_fetch_all($result_buku, MYSQLI_ASSOC );
?>

<!DOCTYPE html>
<html >
<head>
   <title>Document</title>
</head>
<body>
    <h2>Form Transaksi</h2>
   <form action="insert_transaksi.php" method="post">
    <label for="nama_pelanggan"> Nama Pelanggan</label><br>
    <select name="id_pelanggan" id="nama_pelanggan">
        <option disabled selected>Piilh Nama Pelanggan..</option>
        <?php foreach ($options_pelanggan as $option) { ?>
        <option value="<?=$option['id_pelanggan']?>"><?= $option['nama_pelanggan']?></option>
        <?php } ?>
    </select><br>
    <label for="nama_buku">Nama Buku</label><br>
    <select name="id_buku" id="nama_buku">
        <option disabled selected>Pilih Nama Buku..</option>
        <?php foreach ($options_buku as $option) { ?>
        <option value="<?=$option['id_buku']?>"><?=$option['nama_buku']. ' ' . "- Rp ". $option['harga']?></option>
        <?php } ?>
    </select><br>
    <label for="jumlah"> Jumlah </label>
    <input type="number" name="jumlah" id="jumlah"/><br>
    <input type="submit" value="Simpan">
   </form> 
</body>
</html>