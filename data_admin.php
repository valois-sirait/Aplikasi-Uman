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

        .table-bordered {
            color: #1135A2;
            border-collapse:separate ;
            border-radius: 5px;
        }

        .atribut { 
            background-color:#5CB5FB ;
            border-radius: 5px;
            font-size: 14px;
            white-space: nowrap;
        }

        .data {    
            background-color:#fcf080 ;
            border-radius: 5px;
        }
          
        .button a {
            display: block;
            margin-bottom: 5px;  
            width: 100%;  
        }

        .card-body {
            background-color:#DBE9FA;
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

            <!-- Nav Item  Tables -->


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
            <nav class="navbar  navbar-light topbar mb-4 static-top shadow">                
                <br>
                <center> <h4 style="font-weight: bold;">DATA ADMIN UMAN</h4></center>
                <br>                        
            </nav>
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Your Form Content Goes Here -->
                    <form class="card shadow"  action="" method="post" enctype="multipart/form-data">
                    <div class="card-body">
                      <a href="tambah_admin.php" class="btn btn-primary" >
                        Tambah Admin
                      </a>
                      <br></br>
                      <table class="table table-bordered border-primary"> 
                        <thead class="atribut">      
                            <tr>
                              <th>ID ADMIN</th>
                              <th>NAMA ADMIN</th>
                              <th>KATA SANDI</th>
                              <th>NO HANDPHONE</th>
                              <th>EMAIL</th>
                              <th>LEVEL</th>
                              <th>AKSI</th>
                            </tr>
                          </thead>

                          <tbody class="data">
                              <?php
                              $koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
                              $sql=mysqli_query($koneksi,"SELECT * FROM admin");
                              while ($data=mysqli_fetch_array($sql)) {
                            
                              ?>

                                  <tr>
                                      <td><?php echo $data['id_admin']; ?></td>
                                      <td><?php echo $data['nama_admin']; ?></td>
                                      <td><?php echo $data['kata_sandi']; ?></td>
                                      <td><?php echo $data['no_handphone']; ?></td>
                                      <td><?php echo $data['email']; ?></td>
                                      <td><?php echo $data['level']; ?></td>
                                      <td class="button">                                 
                                      <!--button-->
                                          <a href="edit_admin.php?id_admin=<?php echo $data['id_admin']; ?>" class="btn btn-primary">Edit</a>                                                                       
                                          
                                          <a href="hapus_admin.php?id_admin=<?php echo $data['id_admin']; ?>" class="btn btn-danger" onclick= "return confirm('Apakah Anda Yakin ingin Menghapus Data?')">Hapus</a>                                                      
                                      </td>
                                  </tr>                            
                              <?php } ?>
                           </tbody>
                        </table>
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
