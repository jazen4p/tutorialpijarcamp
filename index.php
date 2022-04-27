<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h3>Tambah Data</h3>
    <form action="tambah.php" method="POST">
        <table>
            <tr>
                <td>Nama Produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>  
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>    
            <tr>
                <td>Harga</td>
                <td><input type="number" name="harga"></td>
            </tr>    
            <tr>
                <td>Jumlah</td>
                <td><input type="number" name="jumlah"></td>
            </tr>      
        </table>
        <input type="submit" value="Tambah">
        <a href="index.php">Home</a>
    </form>

    <hr>

    <table border=1 style="width: 100%">
        <thead>
            <th>No</th>
            <th>Nama Produk</th>
            <th>Keterangan</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </thead>
        <tbody>
            <?php 
                include 'koneksi.php';
                $no = 1;
                $data = mysqli_query($koneksi,"select * from produk");
                while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $d['nama_produk']; ?></td>
                        <td><?php echo $d['keterangan']; ?></td>
                        <td><?php echo $d['harga']; ?></td>
                        <td><?php echo $d['jumlah']; ?></td>
                        <td>
                            <a href="update.php?id=<?php echo $d['id_produk']; ?>">EDIT</a>
                            <a href="hapus.php?id=<?php echo $d['id_produk']; ?>">HAPUS</a>
                        </td>
                    </tr>
                    <?php 
                }
            ?>
        </tbody>
    </table>
</body>
</html>