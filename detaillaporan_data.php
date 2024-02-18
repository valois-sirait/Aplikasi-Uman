<?php
session_start();
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

        .card-header {
            background-color: #4268D6;
            color:white;
        }

        .card-body {
            background-color: #ffffb7; 
        }

        .form-control { 
            color : black; 
        }

        ul li:hover a {
            padding-left: 100px;
            background: #408ddb;
            color: rgb(121, 221, 81);

        }

        @media (max-width: 767px) {
            .container-fluid {
                padding: 1px;
                padding-top: 1px;
            }

            .button a {
                display: block;
                margin-bottom: 3px;  
                width: 100%;  
            }
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
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            <!-- <nav class="navbar topbar mb-4 static-top shadow">
                  <div class="container-fluid">
                      <a class="navbar-brand">DATA LAPORAN</a>
                        <form class="d-flex" method="GET" action="data_laporan.php">
                            <input class="form-control me-2" type="text" name="cari" placeholder="Cari..." aria-label="Search" value="<?php if(isset($_GET['cari'])){ echo htmlspecialchars($_GET['cari']); } ?>" autofocus autocomplete="off">
                            <button class="btn btn-info" style="margin-left: 5px;" type="submit">Cari!</button>
                        </form>
                  </div>
            </nav> -->
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Your Form Content Goes Here -->
                    <div class="card shadow">
                        <div class="card-header">
                        DETAIL LAPORAN                      
                        </div>
                        <div class="card-body">
                        <a href="data_laporan.php" class="btn btn-info">Kembali</a> 
                        <hr>                    
                        <form action="" method="GET" enctype="multipart/form-data">
                            <?php 
                            $koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());                           
                            
                            $no_laporan = mysqli_real_escape_string($koneksi, $_GET['no_laporan']);
                            $sql = mysqli_query($koneksi, "SELECT * FROM laporan WHERE no_laporan='$no_laporan'");
                            if (!$sql || mysqli_num_rows($sql) == 0) {
                                // Tampilkan pesan kesalahan atau lakukan tindakan yang sesuai
                                echo "Data tidak ditemukan.";
                            } else {
                                $data = mysqli_fetch_array($sql);                           
                            ?>

                                <div>
                                    <label>No Laporan</label>
                                    <input style="border-color:#979DFF;" type="text" name="no_laporan" class="form-control" value="<?php echo $data['no_laporan']; ?>" readonly>
                                </div><br>                                

                                <div>
                                    <label>Tanggal Laporan</label>
                                    <input style="border-color:#979DFF;" type="text" name="tgl_laporan" class="form-control" value="<?php echo $data['tgl_laporan']; ?>" readonly>
                                </div><br>
                                
                                <div>
                                    <label>Kategori Laporan</label>
                                    <input style="border-color:#979DFF;" type="text" name="kategori_laporan" class="form-control" value="<?php echo $data['kategori_laporan']; ?>" readonly>
                                </div><br>
                                
                                <div>
                                    <label>ID Pelapor</label>
                                    <input style="border-color:#979DFF;" type="text" name="id_pelapor" class="form-control" value="<?php echo $data['id_pelapor']; ?>" readonly>
                                </div><br>

                                <div>
                                    <label>Nama Pelapor</label>
                                    <input style="border-color:#979DFF;" type="text" name="nama_pelapor" class="form-control" value="<?php echo $data['nama_pelapor']; ?>" readonly>
                                </div><br>

                                <div>
                                    <label>Deskripsi Laporan</label>
                                    <textarea class="form-control alert alert-ligt" style="border-color:#979DFF;" class="form-control" rows="7" name="deskripsi_laporan" readonly><?php echo $data['deskripsi_laporan']; ?></textarea>
                                </div>

                                <div>
                                    <label >Bukti</label>
                                    <div>
                                        <img style="width: 300px; height:300px" src="bukti/<?php echo $data['bukti']; ?>" class="mx-auto img-fluid">
                                    </div>
                                </div>
                                <br>
                            <?php } ?>
                        </form>
              
                    </div>

                </div>
            </div>
            <!-- End of Page Content -->
        </div>
    </div>
</body>

</html>
