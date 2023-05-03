<!DOCTYPE html>
<html lang="ID">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
    <link rel="stylesheet" href="../library/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <!--container-->
    <div class="container" id="container1">
      <div class="header">
          <h4 class="text-center">Tambah Data</h4>
        </div>
      <!--akhir container-->

        <form name="daftarform" class="form needs-validation" action="simpan.php" method="POST" novalidate>

          <div class="form-group">
            <label for="nama_produk" class="col-form-label">Nama Produk</label>
              <input type="text" name="nama_produk" class="form-control" maxlength="50" required>
              <div class="invalid-feedback">Belum di isi !!!</div>
          </div>

          <div class="form-group">
            <label for="keterangan" class="col-form-label">Keterangan</label>
              <textarea  name="keterangan" cols="50" rows="2" class="form-control" maxlength="100" required></textarea>
              <div class="invalid-feedback" id="feedbackalamat">Belum di isi !!!</div>
          </div>

          <div class="form-group">
            <label for="harga" class="col-form-label">Harga</label>
              <input type="text" name="harga" class="form-control" maxlength="10" required>
              <div class="invalid-feedback">Belum di isi !!!</div>
          </div>

          <div class="form-group">
            <label for="jumlah" class="col-form-label">Jumlah</label>
              <input type="text" name="jumlah" class="form-control" maxlength="3" required>
              <div class="invalid-feedback">Belum di isi !!!</div>
          </div>
          
          <!--Input Submit-->
          <div class="form-group pt-3 text-center">
            <button class="btn btn-primary" type="submit">Submit</button>
            <a href="../index.php" class="btn btn-danger">Kembali</a>
        </div>
          <!--akhir Input Submit-->

        </form>
    </div>
    <script src="../library/js/bootstrap.bundle.min.js"></script>
    <script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {
        'use strict';
        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');
          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
      </script>
</body>
</html>