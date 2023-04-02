<?php 
require "koneksi.php";

$id_pelanggan = $_GET["id_pelanggan"] ?? 0 ;

if ($id_pelanggan > 0) {
    $sql = "SELECT * FROM tb_pelanggan WHERE id_pelanggan = '$id_pelanggan'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)):
        $id_pelanggan = $row['id_pelanggan'];
        $nama_pelanggan = $row['nama_pelanggan'];
        $alamat = $row['alamat'];

    endwhile;
    $form_action = 'edit_pelanggan.php';
    $title = "Edit Data Pelanggan";
}
else{
    $id_pelanggan = '';
    $nama_pelanggan = '';
    $alamat = '';
    $form_action = 'insert_pelanggan.php';
    $title = "Tambah Data Pelanggan";
}
?>
<!DOCTYPE html>
<head>
    <title>Edit Data Pelanggan</title>
</head>
<body>
    <form action="<?=$form_action?>" method="POST">
        <input type="hidden" name="id_pelanggan" value="<?=$id_pelanggan?>">
        
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan" value="<?=$nama_pelanggan?>"/>
        <br><br>
        

        <label for="alamat"> Alamat </label>
        <input type="text" id="alamat" name="alamat" value="<?=$alamat?>"/>
        <br><br> 

        <input type="submit" value="Simpan" />
        
    </form>
</body>
</html>

