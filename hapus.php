<?php
    include "koneksi.php";

    // menangkap data yang di kirim dari form
    $id = $_GET['id'];
    
    // menginput data ke database
    mysqli_query($koneksi,"delete from produk where id_produk ='$id'");
    
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
?>