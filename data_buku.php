<?php 
require "koneksi.php";

$sql = "SELECT * FROM tb_buku";
$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<head>
   <title>Data Buku</title>
   <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <h1>Data Buku</h1>
    <br>
    <table>

        <tr>
        <th>ID Buku</th>
        <th>Nama Buku</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Harga</th>
        <th colspan="2">Aksi</th>
        </tr>

        <tr>
            <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <td><?=$row['id_buku'] ?></td>
            <td><?=$row['nama_buku']?></td>
            <td><?=$row['penulis']?></td>
            <td><?=$row['penerbit']?></td>
            <td><?=$row['harga']?></td>
            <td>
                <a href="form_bukuu.php?id_buku=<?=$row ['id_buku']?>">Edit</a>
            </td>
            <td>
            <a href="delete_buku.php?id_buku=<?= $row ['id_buku']?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile ?>
        <tr>
    <td colspan="7"><a href="form_bukuu.php">Tambah Data</a></td>
        </tr>
    </table>
</body>
</html>