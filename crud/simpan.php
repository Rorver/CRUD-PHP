<?php
    include '../koneksi/koneksi.php';
    //menyimpan data kedalam variabel
    $id1                  = $_POST['id'];
    $nama_produk          = $_POST['nama_produk'];
    $keterangan           = $_POST['keterangan'];
    $harga                = $_POST['harga'];
    $jumlah               = $_POST['jumlah'];
    //query SQL untuk insert data
    $query = "INSERT INTO produk SET id='$id1',nama_produk='$nama_produk',keterangan='$keterangan',
              harga='$harga',jumlah='$jumlah'";
    mysqli_query($koneksi, $query);
    header("location:../index.php");