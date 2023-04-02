<?php 
require "koneksi.php";

$sql = "SELECT tb_transaksi.id_transaksi, tb_pelanggan.nama_pelanggan, tb_buku.nama_buku,
tb_transaksi.jumlah,tb_buku.harga, tb_transaksi.total_pembayaran, tb_buku.id_buku, tb_pelanggan.id_pelanggan FROM tb_pelanggan INNER JOIN tb_transaksi ON tb_pelanggan.id_pelanggan = tb_transaksi.id_pelanggan INNER JOIN tb_buku ON tb_buku.id_buku = tb_transaksi.id_buku";
$result = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<head>
   <title>Data Buku</title>
   <link rel="stylesheet" href="styleee.css" type="text/css">
</head>
<body>
    <h1>Data Transaksi</h1>
    <table>
        <tr>
        <th>ID Transaksi</th>
        <th>Nama Pelanggan</th>
        <th>Nama Buku</th>
        <th>Jumlah</th>
        <th>Harga</th>
        <th>Total Pembayaran</th>
        <th>Aksi</th>
        </tr>

        <?php while ($row = mysqli_fetch_array($result)): 
            $total_pembayaran = $row['jumlah']*$row['harga'] 
        ?> 
        <td><?=$row['id_transaksi'] ?></td>
            <td><?=$row['nama_pelanggan']?></td>
            <td><?=$row['nama_buku']?></td>
            <td><?=$row['jumlah']?></td>
            <td><?=$row['harga']?></td>
            <td><?=$row['total_pembayaran']?></td>
            <td>
            <a href="form_transaksii.php?id_transaksi=<?=$row['id_transaksi']?>" >Edit</a>
                <a href="delete_transaksi.php?id_transaksi=<?=$row['id_transaksi']?>">Hapus</a>
            </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>
</body>
</html>