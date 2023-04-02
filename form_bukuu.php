<?php 
require "koneksi.php";

$id_buku = $_GET["id_buku"] ?? 0 ;

if ($id_buku > 0) {
    $sql = "SELECT * FROM tb_buku WHERE id_buku = '$id_buku'";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_array($result)):
        $id_buku = $row['id_buku'];
        $nama_buku = $row['nama_buku'];
        $penulis = $row['penulis'];
        $penerbit = $row['penerbit'];
        $harga = $row['harga'];
    endwhile;
    $form_action = 'edit_buku.php';
    $title = "Edit Data Buku";
}
else{
    $id_buku = '';
    $nama_buku = '';
    $penulis = '';
    $penerbit = '';
    $harga = '';
    $form_action = 'insert_buku.php';
    $title = "Tambah Data Buku";
}
?>

<!DOCTYPE html>
<head>
<link rel="stylesheet" href="stylee.css">
</head>
<body>
  
    <form action="<?=$form_action?>" method="POST">
        <input type="hidden" name="id_buku" value="<?=$id_buku?>"/>
        
        <label for="nama_buku">Nama Buku</label><br>
        <input type="text" id="nama_buku" name="nama_buku" value="<?=$nama_buku?>"/>
        <br><br>
        

        <label for="penulis"> Penulis </label><br>
        <input type="text" id="penulis" name="penulis" value="<?=$penulis?>"/>
        <br><br>

        
        <label for="penerbit">Penerbit</label><br>
        <input type="text" id="penerbit" name="penerbit" value="<?=$penerbit?>"/>
        <br><br>

        <label for="harga">Harga</label><br>
        <input type="number" id="harga" name="harga" value="<?=$harga?>"/>
        <br><br>

        <input type="submit" value="Simpan"/>
    </form>
</body>
</html>


