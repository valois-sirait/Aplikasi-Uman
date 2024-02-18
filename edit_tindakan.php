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

        .table {
            width: 100%;
            max-width: 100%; 
            color: black;
            border-collapse: separate;
            border: 2px;
        }

        .atribut{
            white-space: nowrap;  
            color:blue;
            text-align: justify;
            font-size: 13px;

        }

        .data{ 
            white-space: nowrap;
            overflow: hidden;    
            text-overflow: ellipsis;  
            font-size: 13px;
            text-align: justify;
        }

        .button a {
            display: block;
            margin-bottom: 5px;  
            width: 100%;  
        }

        .card-header{
          background-color: #5CB5FB;
        }

        .card-body{
          background-color:#DBE9FA;
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
            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Your Form Content Goes Here -->
                    <form class="card shadow" method="post" action="proses_simpanedit_tindakan.php" enctype="multipart/form-data">
                     <div class="card-header">EDIT TINDAKAN</div>
                       <div class="card-body">
                            <?php
                            $koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
                            $sql=mysqli_query($koneksi,"SELECT * FROM tindakan WHERE nokode_tindakan='$_GET[nokode_tindakan]' ");
                            if($data=mysqli_fetch_array($sql)){
                            ?>
                             <div class="form-group cols-sm-6">
                                <label>Tanggal</label>
                                <input type="text" name="tgl_tindakan" value="<?php echo date('d/m/Y'); ?>" class="form-control" style="border-color:#979DFF;" readonly>
                             </div>
                             
                             <div class="form-group cols-sm-6">
                                <label>NO Tindakan</label>
                                <input type="text" name="nokode_tindakan" value="<?php echo $data['nokode_tindakan']; ?>" class="form-control" style="border-color:#979DFF;" readonly >
                             </div>

                            <div class="form-group cols-sm-6">
                                <label>ID Pelapor</label>
                                <input type="text" name="id_pelapor" value="<?php echo $data['id_pelapor']; ?>" class="form-control" style="border-color:#979DFF;" readonly >
                            </div>

                            <div class="form-group cols-sm-6">
                                <label>NO Laporan</label>
                                <input type="text" name="no_laporan" value="<?php echo $data['no_laporan']; ?>" class="form-control" style="border-color:#979DFF;" readonly>
                            </div>

                            <div class="form-group cols-sm-6">
                                <label>Kategori Laporan</label>
                                <input type="text" name="kategori_laporan" value="<?php echo $data['kategori_laporan']; ?>" class="form-control" style="border-color:#979DFF;" readonly>
                            </div>
                            
                            <div class="form-group cols-sm-6">
                                <label>Deskripsi Tindakan</label>
                                <textarea type="text" name="deskripsi_tindakan"  rows="7" value="<?php echo $data['deskripsi_tindakan']; ?>" class="form-control" style="border-color:#979DFF;"></textarea>
                            </div>

                            <div class="form-group cols-sm-6">
                                <label>ID Admin</label>
                                <input type="text" name="id_admin" value="<?php echo $data['id_admin']; ?>" class="form-control" style="border-color:#979DFF;" readonly>
                            </div>

                            <div>
                                <input type="submit" value="Simpan" class="btn btn-primary">
                                <input type="reset" value="Kosongkan" class="btn btn-warning">
                                <a href="data_tindakan.php" class="btn btn-danger">Batalkan</a>
                            </div>  

                         <?php } ?>
                       </div>  
                    </form>

                </div>

            </div>
            <!-- End of Page Content -->
        </div>
    </div>
</body>

</html>
