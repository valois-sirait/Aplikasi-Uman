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
           border-color: solid black;
        }

        .nav-item {
           font-weight: bold;
        }

        .table {
           width: 100%;
           max-width: 100%; 
           color: black;
           border-collapse: separate;  
        }

        thead {
           white-space: nowrap;  
           color: #1135A2;
           text-align: justify;
           background-color: #5CB5FB;
        }

      .n { 
           white-space: nowrap;
           overflow: hidden;    
           text-overflow: ellipsis;  
           font-size: 14px;
           text-align: justify;
           font-weight:none;       
      }

      .button a {
          display: block;
          margin-bottom: 5px;  
          width: 100%; 
      }

      .navbar {
          background-color: #5CB5FB;
          margin-left: 23px;
          margin-right: 23px;
          border-radius: 5px;
          font-weight: bold;
      }

      .isi {
          background-color: #fcf080;
          color: #1135A2;
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
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            <nav class="navbar topbar mb-3 static-top shadow" name="navbar">                
                <br>
                <center> <h4 style="font-weight: bold;">VERIFIKASI LAPORAN</h4></center>
                <br>                        
            </nav>
            <!-- Main Content -->
            <div id="content">
               
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                  <!-- Your Form Content Goes Here -->
                    <form class="card shadow" method="" action="" enctype="multipart/form-data">
                           <div class="col-md-12">                                                      
                              <!-- DataTales Example -->
                                 <div class="card shadow">                                
                                    <div class="table-responsive"> <!-- Menambahkan kelas table-responsive -->
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>NO LAPORAN</th>
                                                    <th>TANGGAL</th>
                                                    <th>ID PELAPOR</th>
                                                    <th>NAMA</th>
                                                    <th>KATEGORI LAPORAN</th>
                                                    <th>DESKRIPSI LAPORAN</th>
                                                    <th>BUKTI</th>
                                                    <th>STATUS LAPORAN</th>
                                                    <th>AKSI</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-bordered" >
                                              <?php
                                                  $koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

                                                  
                                                  $sql = mysqli_query($koneksi, "SELECT * FROM laporan WHERE status_laporan IN ('', 'PROSES')");

                                                  while ($data = mysqli_fetch_array($sql)) {
                                                                                                 
                                                  ?>

                                                    <tr class="isi">
                                                        <td class="n"><?php echo $data['no_laporan']; ?></td>
                                                        <td class="n"><?php echo $data['tgl_laporan']; ?></td>
                                                        <td class="n"><?php echo $data['id_pelapor']; ?></td>
                                                        <td class="n"><?php echo $data['nama_pelapor']; ?></td>
                                                        <td class="n"><?php echo $data['kategori_laporan']; ?></td>
                                                        <td class="deskripsi"><?php echo substr($data['deskripsi_laporan'], 0, 100) . '...'; ?></td>
                                                        <td><img style="width: 120px" src="bukti/<?php echo$data['bukti'];?>"></td>
                                                        <td class="n">
                                                            <h7 style="font-weight:bold;">
                                                                <?php
                                                                    $status = $data['status_laporan'];
                                                                    $class = ''; 
                                                                    $bg_class='';

                                                                    switch ($status) {
                                                                        case 'DITOLAK':
                                                                            $class = 'text-white';
                                                                            $bg_class = 'bg-danger';
                                                                            break;
                                                                        case 'DITERIMA':
                                                                            $class = 'text-white';
                                                                            $bg_class = 'bg-success';
                                                                            break;
                                                                        case 'PROSES':
                                                                            $class = 'text-white';
                                                                            $bg_class = 'bg-warning';
                                                                            break;
                                                                        case 'SELESAI':
                                                                            $class = 'text-white';
                                                                            $bg_class = 'bg-primary';
                                                                            break;                                                                   // Tambahkan lebih banyak kasus jika diperlukan

                                                                        default:
                                                                            $class = 'text-muted';
                                                                            break;
                                                                    }                      
                                                                    echo '<b class="' . $class . ' ' . $bg_class . '">' . $status . '</b>';
                                                                ?>
                                                            </h7>
                                                        </td>                                                   
                                                        <td class="button">
                                                              <!--button-->
                                                              <a href="verifikasi_detail.php?no_laporan=<?php echo $data['no_laporan']; ?>" class="btn btn-info">
                                                                  Detail
                                                              </a>
                                                              <a href="verifikasi_tindakan.php?no_laporan=<?php echo $data['no_laporan']; ?>" class="btn btn-warning">
                                                                  Tindak
                                                              </a>
                                                              <br>
                                                              <a href="verifikasi_cetak1.php?no_laporan=<?php echo $data['no_laporan']; ?>" class="btn btn-primary" style="font-size: 12px; line-height: 1;" target="_blank">
                                                                  Cetak Laporan
                                                              </a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                          </div>
                    </form>
                </div>
            </div>
            <!-- End of Page Content -->
        </div>
    </div>
</body>

</html>
