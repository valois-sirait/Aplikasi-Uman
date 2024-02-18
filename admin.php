<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

// menampilkan otomatis jumlah laporan baru
$query = "SELECT COUNT(*) AS jumlah_laporan_baru FROM laporan WHERE status_laporan ='' ";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$jumlah_laporan_baru = $row['jumlah_laporan_baru'];

//menampilkan otomatis jumlah laporan
$query = "SELECT COUNT(*) AS jumlah_laporan FROM laporan";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$jumlah_laporan = $row['jumlah_laporan'];

//Menampilkan otomatis jumlah pengguna
$query = "SELECT COUNT(*) AS jumlah_pengguna FROM pelapor";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$jumlah_pengguna = $row['jumlah_pengguna'];

//Menghubungkan otomatis jumlah admin
$query = "SELECT COUNT(*) AS jumlah_admin FROM admin";
$result = mysqli_query($koneksi, $query);
$row = mysqli_fetch_assoc($result);
$jumlah_admin = $row['jumlah_admin'];

mysqli_close($koneksi);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Uman</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
      body {
          color: #1135A2;
          font-weight: bold;
      }

      .col-md-12 {
          background-color: #ffffb7;
      }

      .kata {
          color: whitesmoke;
          font-weight: bold;
          text-align: justify;
      }

      .navbar { 
          background-color: #5CB5FB;
          margin-left: 23px;
          margin-right: 23px;
          border-radius: 5px;
          font-weight: bold;
      }

      ul li:hover a {
            padding-left: 100px;
            background: #408ddb;
            color: rgb(121, 221, 81);

      }
    </style>

</head>

<body id="page-top">
    <!-- Page Wrapper -->

    <div id="wrapper">
        <!-- Sidebar -->

        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="admin.php">
              <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-eye-slash"></i>
              </div>
              <div class="sidebar-brand-text mx-3">ADMIN UMAN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
              <a class="nav-link" href="admin.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Halaman Admin</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            Akses Kontrol
            </div>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" href="admin_verifikasi.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Verifikasi Laporan</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="data_admin.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Admin</span></a>
            </li>

            <li class="nav-item">
              <a class="nav-link" href="data_pengguna.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Pengguna</span></a>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
              <a class="nav-link" href="data_laporan.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Laporan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" href="data_tindakan.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Data Tindakan</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
              <a class="nav-link" href="logout2.php">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Keluar</span></a>
            </li>

            <!-- Nav Item - Tables -->

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
          <div id="content-wrapper">
              <!-- Topbar -->
              <nav class="navbar  navbar-light topbar mb-4 static-top shadow">                
                  <br>
                  <center> <h3 style="font-weight:bold;">UMAN. UNIVERSITAS AMAN!</h3></center>
                  <br>                        
              </nav>
              <!-- Main Content -->
              <div id="content">
                  <!-- Begin Page Content -->
                  <div class="container-fluid">
                      <!-- Your Form Content Goes Here -->
                      <form class="card shadow" >
                          <div class="col-md-12" >
                              <hr>
                              <h3>Selamat Datang  <b><?php echo $_SESSION['nama_admin'];?></h3> 
                              <hr>
                              
                              <div class="row">
                                <!-- card laporan baru -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                  <a href="admin_verifikasi.php" style="text-decoration: none; color: inherit;">
                                    <div class="card border-left-primary shadow h-100 py-0">
                                      <div class="card-body" style="background-color:#A0CFEC; border-radius: 5px;">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-0">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Baru</div>
                                            <br>
                                            <div class="h5 mb-0 font-weight-bold text-blue-800"><?php echo $jumlah_laporan_baru; ?></div>
                                          </div>
                                          <div class="col-auto">
                                            <i class="fas fa-fw fa-bell fa-2x text-gray-700"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                               

                                <!-- card jumlah laporan -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                  <a href="data_laporan.php" style="text-decoration: none; color: inherit;">
                                    <div class="card border-left-success shadow h-100 py-0">
                                      <div class="card-body" style="background-color:#AAF0D1; border-radius: 5px;">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-0">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Jumlah Laporan</div>
                                            <br>
                                            <div class="h5 mb-0 font-weight-bold text-blue-800"><?php echo $jumlah_laporan; ?></div>
                                          </div>
                                          <div class="col-auto">
                                            <i class="fas fa-fw fa-table fa-2x text-gray-700"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                </div>

                                <!-- card jumlah pengguna -->
                                <div class="col-xl-3 col-md-6 mb-4">
                                  <a href="data_pengguna.php" style="text-decoration: none; color: inherit;">
                                    <div class="card border-left-info shadow h-100 py-0">
                                      <div class="card-body" style="background-color:#C7F7FF; border-radius: 5px;">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-0">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Jumlah Pengguna</div>                                                            
                                            <br>
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-blue-800"><?php echo $jumlah_pengguna; ?></div>                                                                                   
                                          </div>
                                          <div class="col-auto">
                                            <i class="fas fa-fw fa-user fa-2x text-gray-700"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                </div>

                               <!-- card jumlah admin-->
                                <div class="col-xl-3 col-md-6 mb-4">
                                  <a href="data_admin.php" style="text-decoration: none; color: inherit;">
                                    <div class="card border-left-warning shadow h-100 py-0">
                                      <div class="card-body" style="background-color:#FFFFCC; border-radius: 5px;">
                                        <div class="row no-gutters align-items-center">
                                          <div class="col mr-0">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"> Jumlah Admin</div>
                                            <br>
                                            <div class="h5 mb-0 font-weight-bold text-blue-800"><?php echo $jumlah_admin; ?></div>
                                          </div>
                                          <div class="col-auto">
                                            <i class="fas fa-fw fa-user fa-2x text-gray-700"></i>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </a>
                              </div>

                              <br>
                              <!-- card kata-kata bijak -->
                              <div class="col-xl-12col-md-6 mb-4">
                                  <div class="card shadow h-100 py-0">
                                    <div class="card-body" style="background-color:#4268D6; border-radius: 5px;">
                                      <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                          <div class=" text-uppercase mb-1"><h2 class="kata" >Admin adalah pilar keberhasilan pelaporan. Dengan bijak menanggapi setiap laporan, kita bisa menjaga integritas dan keadilan universitas kita.<h2></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>                         
                          <div>  
                      </form>
                  </div>
              </div>
              <!-- End of Page Content -->
        </div>
    </div>
</body>

</html>
