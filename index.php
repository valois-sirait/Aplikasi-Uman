<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Uman | Halaman Masuk</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  
  <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "e80efe6e-c335-477c-a8c7-17366740ac7d";

    function crispNotification() {
        $crisp.push(["do", "message:show", ["text", "Chat Kami Secara Langsung dengan Mengklik Icon Ini"]]);
    }

    (function () {
        var d = document;
        var s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
        
        // memanggil fungsi crispNotification ( 5000ms atau 5 detik)
        setTimeout(crispNotification, 5000);
    })();
  </script>

  <style>
   h1 {
      font-size: 20px;
      color: #151B8D;
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
      font-weight: bold;
    }

   h2 {
      color: #151B8D;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: bold;
      font-size: 30px;
   }

   h3 {
      font-size: 12px;
      color: #151B8D;
      font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
      font-weight: bold;
   }

   .mx-auto img-fluid {
      width: 400px; 
      height: 100px; 
      border-radius:5px;
   }
   

 </style>
</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-6">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0" >
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class=></div>
              <div class="col-lg-12">
                <div class="p-4">

                <div class="col-xl-12col-md-6 mb-4">
                    <div class="card shadow h-100 py-0">
                      <div class="card-body" style="background-color: #DBE9FA;border-radius: 5px;">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-0">
                           <div class="text-xl font-weight-bold  text-uppercase mb-0">
                           <div class="text-center">
                              <img src="logo/umanhead.jpg" alt="Deskripsi gambar" class="mx-auto img-fluid"><br>
                              <h3> </h3>
                              <h3>Aplikasi Pelaporan Terhadap Tindakan Pelecehan Seksual, Penyalahgunaan Narkoba, Pungutan Liar dan Perundungan di Universitas Katolik Santo Thomas</h3>
                           </div>
                           </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
             
                  <form method="post" action="cek_login.php" enctype="multipart/form-data">
                    <div>
                      <input type="text" name="nama_pengguna" class="form-control alert alert-ligt" style="border-color:#979DFF;" placeholder="Masukkan Nama Pengguna" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                      <input type="password" name="kata_sandi" class="form-control alert alert-light" style="border-color:#979DFF;" placeholder="Masukkan Kata Sandi" autocomplete="off" required>
                    </div><br>

                   <input type="submit" class="btn btn-primary" value="Masuk!">
                   
                   </form>
                    <div class="text-center">
                     Belum Punya Akun?<br>
                   <a class="small" href="register.php">Daftar!</a>
                  </div>
                    <div class="text-center">
                    <a class="small" href="index2.php">Masuk Sebagai Admin</a>
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
