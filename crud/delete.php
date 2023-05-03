<?php
    include '../koneksi/koneksi.php';

    //menyimpan data id kedalam variabel
    $id1            = $_GET['id'];

    //query SQL untuk insert data
    $query = "DELETE from produk WHERE id='$id1'";
    mysqli_query($koneksi,$query);
    header("location:../index.php");
