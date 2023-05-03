<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PijarCamp</title>
    <link rel="stylesheet" href="library/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" #id="container2">
      <div style="background-color:transparent !important;" class="jumbotron mt-5">
        <div class="card">
          <div class="card-header text-center">
            <h4>Produk</h4>
          </div>
          <div class="card-body">
          <table class="table table-hover table-bordered">
              <thead>
                <tr>
                <th scope="col">ID</th>
                  <th scope="col">Nama Produk</th>
                  <th scope="col">Keterangan</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Jumlah</th>
                  <th class="text-center">Action</th>
                </tr>
              </thead>
              <tbody>
                  <?php
                      include 'koneksi/koneksi.php';
                      $produk = mysqli_query($koneksi, "SELECT * from produk");
                      $id1=1;
                      foreach ($produk as $row){
                          echo "<tr>
                          <td>$id1</td>
                          <td>".$row['nama_produk']."</td>
                          <td>".$row['keterangan']."</td>
                          <td>".$row['harga']."</td>
                          <td>".$row['jumlah']."</td>
                          <td class='text-center'>
                              <a class='btn btn-primary badge-pill' style='width: 80px;' href='crud/fromedit.php?id=$row[id]'>Edit</a>
                              <a class='btn btn-danger badge-pill' style='width: 80px;' href='crud/delete.php?id=$row[id]'>Delete</a>
                          </td>
                        </tr>";
                        $id1++;
                      }
                  ?>
              </tbody>
            </table>
            <a class="btn btn-primary" href="crud/formTambah.php" role="button">Tambah Data</a>
          </div>
        </div>
      </div>
    </div>
      <script src="library/js/bootstrap.bundle.min.js"></script>
      <script src="library/js/jquery-3.6.0.min.js"></script>
      <script src="library//js/popper.min.js"></script>
</body>
</html>