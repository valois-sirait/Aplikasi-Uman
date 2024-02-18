<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Uman | Masuk Admin</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
   h1 {
      font-size: 20px;
      color: #151B8D;
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
      font-weight: bold;
    }

   h2 {
      font-size: 30px;
      color: #151B8D;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: bold;
   }

 </style>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class=></div>
              <div class="col-lg-12">
                <div class="p-5">

                  <div class="col-xl-12col-md-6 mb-4">
                      <div class="card shadow h-100 py-0">
                        <div class="card-body" style="background-color: #DBE9FA;border-radius: 5px;">
                          <div class="row no-gutters align-items-center">
                            <div class="col mr-0">
                            <div class="text-xl font-weight-bold  text-uppercase mb-0">
                              <div class="text-center">
                                <h1>Selamat Datang Admin</h1><h2> UMAN | Universitas Aman</h2>
                              </div>
                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  
                    <form method="post" action="cek_loginadmin.php" enctype="multipart/form-data">
                    <div>
                      <input type="text" name="nama_admin" class="form-control" style="border-color:#979DFF;" placeholder="Masukkan Nama Admin" autocomplete="off" required>
                    </div>
                    <br>

                    <div class="form-group">
                      <input type="password" name="kata_sandi" class="form-control" style="border-color:#979DFF;" placeholder="Masukkan Kata Sandi" autocomplete="off" required>
                    </div>
                    <br>

                   <input type="submit" class="btn btn-primary" value="Masuk!">
                   <hr>
                  </form>
                  <div class="text-center">
                  <a class="small" href="index.php">Kembali Ke Beranda</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
