<?php 
require "koneksi.php";

$sql = "SELECT * FROM tb_pelanggan";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<head>
   <title>Data Pelanggan</title>
   <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <h1>Data Pelanggan</h1>
    <table border="1">
        <tr>
        <th>ID Pelanggan</th>
        <th>Nama Pelanggan</th>
        <th>Alamat</th>
        <th>Aksi</th>
        </tr>

        <tr>
            <?php while ($row=mysqli_fetch_assoc($result)) : ?>
            <td><?=$row['id_pelanggan'] ?></td>
            <td><?=$row['nama_pelanggan']?></td>
            <td><?=$row['alamat']?></td>
            <td>
                <a href="formpelanggan.php?id_pelanggan=<?= $row ['id_pelanggan']?>">Edit</a>
                <a href="delete_pelanggan.php?id_pelanggan=<?= $row ['id_pelanggan']?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile ?>
        <tr>
            <td colspan="4"><a href="formpelanggan.php">Tambah</a></td>
        </tr>
    </table>
</body>
</html>