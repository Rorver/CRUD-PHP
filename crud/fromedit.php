<?php
    include '../koneksi/koneksi.php';
    $id1                = $_GET['id'];
    $produk              = mysqli_query($koneksi, "select * from produk where id='$id1'");
    $row                = mysqli_fetch_array($produk);

?>

<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Table</title>
    <link rel="stylesheet" href="../library/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <!--container-->
    <div class="container" id="container3">
      <div class="header">
          <h4 class="text-center">EDIT</h4>
        </div>
    <!--akhir container-->
        
        <!--Form Edit-->
        <form action="edit.php" method="POST">
            <input type="hidden" value="<?php echo $row['id'];?>" name="id" >

            <div class="form-group">
                <label for="namaProduk" class="col-form-label">Nama Produk</label>
                <input type="text" maxlength="50" class="form-control" value="<?php echo $row['nama_produk'];?>" name="nama_produk" id="">
            </div>

            <div class="form-group">
                <label for="Keterangan" class="col-form-label">Keterangan</label>
                <input type="text" maxlength="50" class="form-control" value="<?php echo $row['keterangan'];?>" name="keterangan" id="">
            </div>

            <!--Input Asal Sekolah-->
            <div class="form-group">
            <label for="harga" class="col-form-label">Harga</label>
                <input type="text" maxlength="50" class="form-control" value="<?php echo $row['harga'];?>" name="harga" id="">
            </div>

            <div class="form-group">
            <label for="jumlah" class="col-form-label">Jumlah</label>
                <input type="text" maxlength="50" class="form-control" value="<?php echo $row['jumlah'];?>" name="jumlah" id="">
            </div>

            <div class="form-group pt-3 text-center">
                <button class="btn btn-primary" type="submit">Submit</button>
                <a href="tablesiswa.php" class="btn btn-danger">Kembali</a>
            </div>
        </form>
    </div>
    <script src="../library/js/bootstrap.bundle.min.js"></script>
</body>
</html>