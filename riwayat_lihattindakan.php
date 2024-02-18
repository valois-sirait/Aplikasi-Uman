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
            color: blue;
            font-weight: bold;
        }

        .card-body {
            background-color: #ffffb7; 
        }

        .card-header {
            background-color: #4268D6;
            color:white;
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
        }
    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="pelapor.php">
                <img src="logo/logouman.jpg" width="55" height="55" alt="logo" style="border-radius: 5px;">                        
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class=""></i>
                </div>
                <div class="sidebar-brand-text mx-3">UNIVERSITAS AMAN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="pelapor.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Halaman Utama</span></a>
            </li>

            <hr class="sidebar-divider">
            <li class="nav-item">
                <a class="nav-link" href="fitur_profil.php">
                    <i class="fas fa-fw fa-user"></i>
                    <span>Profil</span></a>
            </li>

            <hr class="sidebar-divider">
             <li class="nav-item">
                <a class="nav-link" href="fitur_lapor.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Lapor</span></a>
            </li>

            <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link" href="fitur_riwayatlaporan.php">
                    <i class="fas fa-fw fa-list"></i>
                    <span>Riwayat Laporan</span></a>
            </li>

            <hr class="sidebar-divider">
             <li class="nav-item">
                <a class="nav-link" href="fitur_dukunganbantuan.php">
                   <i class="fas fa-fw fa-info-circle"></i>
                    <span>Bantuan & Dukungan</span></a>
            </li>

            <hr class="sidebar-divider">
             <li class="nav-item">
                <a class="nav-link" href="logout.php">
                 <i class="fas fa-fw fa-sign-out-alt"></i>
                 <span>Keluar</span></a>
            </li>
            <hr class="sidebar-divider">
 
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
               <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                   
                    <div class="card shadow">
                        <div class="card-header">
                        TINDAKAN                      
                        </div>
                        <div class="card-body">
                        <a href="fitur_riwayatlaporan.php" class="btn btn-info">Kembali</a> 
                        <hr>                    
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php 
                            $koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());

                            $sql=mysqli_query($koneksi,"SELECT* FROM laporan, tindakan WHERE tindakan.no_laporan='$_GET[no_laporan]' AND tindakan.no_laporan=laporan.no_laporan");
                            $cek=mysqli_num_rows($sql);
                            if ($cek<1) //jika tidak ditemukan 
                            {
                                echo "<font color='red'>Mohon bersabar laporan belum ditindak...</font>";
                            }
                            else
                            {

                                if ($data=mysqli_fetch_array($sql)) 
                                {
                                
                            ?>
                            
                            <div>
                            Nomor Tindakan
                            <input style="border-color:#979DFF;" type="text" name="nokode_tindakan" value="<?php echo $data['nokode_tindakan']; ?>" class="form-control" readonly>
                            </div>
                            <br>
                            <div>
                            Tanggal Tindakan
                            <input style="border-color:#979DFF;" type="text" name="tgl_tindakan" value="<?php echo $data['tgl_tindakan']; ?>" class="form-control" readonly>
                            </div>
                            <br>
                            <div>
                            Admin Penindak
                            <input style="border-color:#979DFF;" type="text" name="id_admin" value="<?php echo $data['id_admin']; ?>" class="form-control" readonly>
                            </div>
                            <br>
                            <div>
                            Deskripsi Tindakan
                            <textarea  style="border-color:#979DFF;" class="form-control" rows="7" name="deskripsi_tindakan" readonly=""><?php echo $data['deskripsi_tindakan']; ?>
                            </textarea>
                            </div>
                            
                            
                           
                            <?php } } ?> 
                        </form>

                    </div>

                </div>
                <!-- End of Page Content -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
</body>

</html>
