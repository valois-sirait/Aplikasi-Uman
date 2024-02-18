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

    <title>Halaman Utama</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <style>
        body {
            color: #1135A2;
            font-weight: bold;
        }

        .carousel-inner {
            text-align: center;
        }

        .carousel-inner img {
            display: inline-block;
            object-fit: cover;
        }

        .navbar{
            background-color: #4268D6;
            margin-left: 23px;
            margin-right: 23px;
            border-radius: 5px;
            font-size: 22px;
            text-align: center;
            color: white;
            display: flex;
            align-items: center; /* Penengah vertikal */
            justify-content: center; /* Penengah horizontal */ 
            height: 80px; /*  tinggi  */    
        }    

        .text-center {
            font-weight:bold;
        }

        ul li:hover a {
            padding-left: 100px;
            background: #408ddb;
            color: rgb(121, 221, 81);

        }
   
        @media (max-width: 767px) {
            .navbar {
                margin-left: 23px;
                margin-right: 23px;
                font-size: 14px;
            }

            .sidebar {
                margin-left: 0;
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

            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>

        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Topbar -->
            <nav class="navbar  navbar-light mb-4 static-top shadow">
                UMAN. UNIVERSITAS AMAN!
            </nav>

            <!-- Main Content -->
            <div id="content">


                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Your Form Content Goes Here -->
                    <form class="card shadow">
                        <!-- Carousel Section -->
                        <div id="photoCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner text-center">
                                <div class="carousel-item active">
                                    <img src="logo/uman.png" alt="Slide 1" class="d-block mx-auto img-fluid">
                                </div>
                                <div class="carousel-item">
                                    <img src="logo/pelecehan_seksual.JPG" alt="Slide 2" class="d-block mx-auto img-fluid">
                                </div>
                                <div class="carousel-item">
                                    <img src="logo/penyalahgunaan_narkoba.JPG" alt="Slide 3" class="d-block mx-auto img-fluid">
                                </div>
                                <div class="carousel-item">
                                    <img src="logo/pungutan_liar.JPG" alt="Slide 4" class="d-block mx-auto img-fluid">
                                </div>
                                <div class="carousel-item">
                                    <img src="logo/perundungan.JPG" alt="Slide 5" class="d-block mx-auto img-fluid">
                                </div>
                                <!-- Add more carousel items as needed -->
                            </div>
                            <a class="carousel-control-prev custom-control" href="#photoCarousel" role="button" data-slide="prev" style="background: #5CB5FB;">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next custom-control" href="#photoCarousel" role="button" data-slide="next" style="background: #5CB5FB;">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        <!-- End of Carousel Section -->
                    </form>


                </div>

            </div>
            <!-- End of Page Content -->
            <marquee><h5 style="font-weight:bold"> Selamat Datang <?php echo $_SESSION['nama_pelapor'];?> di Aplikasi Uman &#128075;, Mohon &#x1F64F; Gunakan Aplikasi dengan Bijak, Salam Uman. Universitas Aman! &#128147;</marquee>
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->

        <!-- End of Footer -->

    </div>
    <!-- End of Page Wrapper -->


</body>

</html>
