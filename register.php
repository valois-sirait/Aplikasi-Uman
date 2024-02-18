<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Uman | Daftar Akun</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
   h1 {
      font-size: 20px;
      color: #1135A2;
      font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif ;
      font-weight: bold;
    }

   h2 {
     color: #1135A2;
     font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
     font-weight: bold;
   }

   h3 {
     font-size: 11px;
     color: #1135A2;
     font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
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
                  <div class="text-center">
                    <h1>Selamat Datang di Halaman Daftar </h1>
                    <h2>UMAN | Universitas Aman </h2>
                    <h3>Aplikasi Pelaporan Terhadap Tindakan Pelecehan Seksual, Penyalahgunaan Narkoba, Pungutan Liar dan Perundungan di Universitas Katolik Santo Thomas</h3>
                  </div><br>
                  
                     <form method="post" action="simpan_register.php">

                     <div>
                      <input type="text" name="id_pelapor" class="form-control" style="border-color:#979DFF;" placeholder="Kode Identitas (NPM, NIDN, Kode Pegawai, dll)" autocomplete="off" required>
                     </div>
                       <br>
                      <div>
                      <input type="text" name="nama_pelapor" class="form-control" style="border-color:#979DFF;" placeholder="Masukan Nama Lengkap" autocomplete="off" required>
                      </div>
                      <br>
                      <div>
                      <input type="text" name="email" class="form-control" style="border-color:#979DFF;" placeholder="Masukan Alamat Email" autocomplete="off" required>
                      </div>
                      <br>
                      <div>
                      <input type="text" name="no_handphone" class="form-control" style="border-color:#979DFF;" placeholder="Masukan No Handphone" autocomplete="off" required>
                      </div>
                      <br>
                      <div>
                      <input type="text" name="nama_pengguna" class="form-control" style="border-color:#979DFF;" placeholder="Masukkan Nama Pengguna" autocomplete="off" required>
                      </div>
                      <br> 
                      <div>
                      <input type="password" name="kata_sandi" class="form-control" style="border-color:#979DFF;" placeholder="Masukkan Kata Sandi" required>
                      </div>
                      <br>
                      <div>
                      <label>Mendaftar Sebagai</label>
                       <select name="status" class="form-control" style="border-color:#979DFF;" required>
                        <option value="Mahasiswa">Mahasiswa</option>
                        <option value="Dosen">Dosen</option>
                        <option value="Pegawai">Pegawai</option>
                       </select>
                    </div>
                    <br>
                   <div>
                   <input type="submit" class="btn btn-primary" value="Daftar">
                    </div>
                    <hr>
                  </form>
                  <div class="text-center">
                  Sudah Punya Akun?<br>
                  <a class="small" href="index.php">Silahkan Login!</a>
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
