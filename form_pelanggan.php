<!DOCTYPE html>
<head>
    <title>Form Pelanggan</title>
</head>
<body>
    <h2>Form Pelanggan</h2>
    <form action="insert_pelanggan.php" method="POST">
        <input type="hidden" name="id_pelanggan">
        
        <label for="nama_pelanggan">Nama Pelanggan</label>
        <input type="text" id="nama_pelanggan" name="nama_pelanggan"/>
        <br><br>
        

        <label for="alamat"> Alamat </label>
        <input type="text" id="alamat" name="alamat"/>
        <br><br> 

        <input type="submit" value="Simpan"/>
        
    </form>
</body>
</html>

