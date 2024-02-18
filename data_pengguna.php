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
        }

        .nav-item {
            font-weight: bold;
        }

        table {
            color: #1135A2;
            border-collapse:separate;
            border-radius: 5px;

        }

        .atribut {
            white-space: nowrap; 
            background-color: #5CB5FB; 
            color:#1135A2;
            text-align: justify;
            font-weight: bold;
        }

        .data {
            background-color: #fcf080;
            white-space: nowrap;  
            color:#1135A2;
            text-align: justify;
            font-size: 16px;
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
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            <nav class="navbar topbar mb-4 static-top shadow">
                  <div class="container-fluid">
                      <a class="navbar-brand">DATA PENGGUNA</a>
                        <form class="d-flex" method="GET" action="data_pengguna.php">
                            <input class="form-control me-2" type="text" name="cari" placeholder="Cari..." aria-label="Search" value="<?php if(isset($_GET['cari'])){ echo htmlspecialchars($_GET['cari']); } ?>" autofocus autocomplete="off">
                            <button class="btn btn-info" style="margin-left: 5px;" type="submit">Cari!</button>
                        </form>
                  </div>
            </nav>
            <!-- Main Content -->
            <div id="content">
                  <!-- Begin Page Content -->
                  <div class="container-fluid">
                      <!-- Your Form Content Goes Here -->
                      <form class="card shadow" method="" action="" enctype="multipart/form-data">
                        
                            <div class="table-responsive"> 
                                  <table class="table table-bordered">                                                        
                                     <thead class="atribut">      
                                         <tr>
                                             <th>ID </th>
                                             <th>NAMA </th>
                                             <th>EMAIL</th>
                                             <th>NO HP</th>
                                             <th>NAMA AKUN</th>
                                             <th>KATA SANDI</th>
                                             <th>STATUS</th>
                                             <th>AKSI</th>
                                         </tr>
                                     </thead>
                                     <tbody class="data">
                                        <?php
                                        $koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
                                        
                                        //untuk fitur cari 
                                        $cari = isset($_GET['cari']) ? mysqli_real_escape_string($koneksi, $_GET['cari']) : '';
                                        $whereClause = $cari != '' ? " AND (id_pelapor LIKE '%$cari%' OR nama_pelapor LIKE '%$cari%' OR email LIKE '%$cari%' OR no_handphone LIKE '%$cari%' OR nama_pengguna LIKE '%$cari%' OR kata_sandi LIKE '%$cari%' OR status LIKE '%$cari%')" : '';

                                        $sql=mysqli_query($koneksi,"SELECT * FROM pelapor WHERE 1=1 $whereClause");
                                        while ($data=mysqli_fetch_array($sql)) {                               
                                        ?>
                                            <tr>
                                                <td><?php echo $data['id_pelapor']; ?></td>
                                                <td><?php echo $data['nama_pelapor']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['no_handphone']; ?></td>
                                                <td><?php echo $data['nama_pengguna']; ?></td>
                                                <td><?php echo $data['kata_sandi']; ?></td>
                                                <td><?php echo $data['status']; ?></td>
                                                <td class="button">                                 
                                                <!--button-->                                                                                                                                                            
                                                    <a href="hapus_pelapor.php?id_pelapor=<?php echo $data['id_pelapor']; ?>" class="btn btn-danger" onclick= "return confirm('Apakah Anda Yakin ingin Menghapus Data?')">Hapus</a>                                                      
                                                </td>
                                            </tr>                            
                                          <?php } ?>
                                      </tbody>
                                  </table>   

                            </div> 

                      </form>

                  </div>

              </div>
            <!-- End of Page Content -->
        </div>

    </div>


</body>

</html>
