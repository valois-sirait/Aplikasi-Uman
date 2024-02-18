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

    <title>Fitur Riwayat Laporan</title>
    

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
 <style>
    .table {
        width: 100%;
        max-width: 100%; 
        color: black;
        border-collapse: separate;
        border: 2px;
    }

    body {
        color: #1135A2;
        border-color: solid black;
    }

    .nav-item {
        font-weight: bold;
    }

    thead {
        white-space: nowrap;  
        color:#1135A5;
        text-align: justify;
        font-weight: bold;
        background-color:#5CB5FB
    }

    .n { 
        white-space: nowrap;
        overflow: hidden;    
        text-overflow: ellipsis;  
        font-size: 14px;
        text-align: justify;     
    }

    tbody {
        background-color: #ffffb7;
        color:#1135A2;
    }

   .button a {
        display: block;
        margin-bottom: 5px;  
        width: 100%;  
    }

    .navbar {
        background-color: #4268D6;
        margin-left: 23px;
        margin-right: 23px;
        border-radius: 5px;
        font-weight: bold;
        color: white;
        display: flex;
        align-items: center; /* Penengah vertikal */
        justify-content: center; /* Penengah horizontal */ 
        height: 76px; /*  tinggi  */ 
    }

    ul li:hover a {
        padding-left: 100px;
        background: #408ddb;
        color: rgb(121, 221, 81);

    }

    @media (max-width: 767px) {
        thead {
            white-space: nowrap;  
            color:#1135A5;
            text-align: justify;
            font-weight: bold;
            background-color:#5CB5FB;
            font-size: 11px;
        }

        .container-fluid {
            padding: 1px;
            padding-top: 1px;
        }

        .table {
            width: 100%;
            max-width: 100%; 
            color: black;
            border-collapse: separate;
            border: 2px;
            padding: 1px;
        }    

        .n { 
            white-space: nowrap;
            overflow: hidden;    
            text-overflow: ellipsis;  
            font-size: 10px;
            text-align: justify;     
        }

        tbody {
            background-color: #ffffb7;
            color:#1135A2;
        }

        .navbar {
            background-color: #4268D6;
            margin-left: 1px;
            margin-right: 1px;
            border-radius: 5px;
            font-weight: bold;
            color: white;
            height: 80px;
        }

        .navbar-brand {
            font-size: 15px;
            vertical-align: ;
            line-height: 1;
        }

        .table-responsive {
            padding: 0;
        }

        .button a {
            display: block;
            margin-bottom: 5px;  
            width: 100%;
            font-size: 11px;  
        }

        .deskripsi {
            max-width: 30px; 
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
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

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar topbar mb-4 static-top shadow">
                    <div class="container-fluid">
                        <a class="navbar-brand">RIWAYAT LAPORAN</a>
                        <form class="d-flex" method="GET" action="fitur_riwayatlaporan.php">
                            <input class="form-control me-2" type="text" name="cari" placeholder="Cari..." aria-label="Search" value="<?php if(isset($_GET['cari'])){ echo htmlspecialchars($_GET['cari']); } ?>" autofocus autocomplete="off">
                            <button class="btn btn-info" style="margin-left: 5px;" type="submit">Cari!</button>
                        </form>
                    </div>
                </nav>


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- konten atau isi dalam fitur dibuat disini-->
                    <form class="card shadow" method="" action="" enctype="multipart/form-data">
                        <div class="col-md-12"> 
                            <div class="card-header"></div>
                            <div class="card shadow">
                                <div class="table-responsive"> <!-- Menambahkan kelas table-responsive-->
                                    <table class="table table-bordered">
                                        <thead class="atribut">
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
                                        <tbody >
                                            <?php
                                            include "koneksi.php";

                                            $id_pelapor = $_SESSION['id_pelapor'];
                                            
                                            //untuk fitur cari 
                                            $cari = isset($_GET['cari']) ? mysqli_real_escape_string($koneksi, $_GET['cari']) : '';
                                            $whereClause = $cari != '' ? " AND (no_laporan LIKE '%$cari%' OR tgl_laporan LIKE '%$cari%' OR id_pelapor LIKE '%$cari%' OR nama_pelapor LIKE '%$cari%' OR kategori_laporan LIKE '%$cari%' OR deskripsi_laporan LIKE '%$cari%' OR status_laporan LIKE '%$cari%')" : '';
                                            
                                            $query = "SELECT * FROM laporan WHERE id_pelapor = $id_pelapor $whereClause";
                                            $result = mysqli_query($koneksi, $query);
                                            
                                            while ($data = mysqli_fetch_array($result)) {
                                            ?>
                                                <tr class="isi">
                                                    <td class="n"><?php echo $data['no_laporan']; ?></td>
                                                    <td class="n"><?php echo $data['tgl_laporan']; ?></td>
                                                    <td class="n"><?php echo $data['id_pelapor']; ?></td>
                                                    <td class="n"><?php echo $data['nama_pelapor']; ?></td>
                                                    <td class="n"><?php echo $data['kategori_laporan']; ?></td>
                                                    <td class="deskripsi"><?php echo substr($data['deskripsi_laporan'], 0, 100) . '...'; ?></td>
                                                    <td><img class="n" style="width: 120px" src="bukti/<?php echo$data['bukti'];?>"></td>
                                                    <td class="n">
                                                        <h7 style="font-weight:bold;">
                                                            <?php
                                                                $status = $data['status_laporan'];
                                                                $class = ''; 
                                                                $bg_class='';
                                                                //Menandai Keterangan warna pada status 
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
                                                        <a href="riwayat_detail.php?no_laporan=<?php echo $data['no_laporan']; ?>" class="btn btn-info">
                                                            Detail
                                                        </a>

                                                        <a href="riwayat_lihattindakan.php?no_laporan=<?php echo $data['no_laporan']; ?>" class="btn btn-primary">
                                                            Tindakan
                                                        </a>

                                                        <a href="riwayat_edit.php?no_laporan=<?php echo $data['no_laporan']; ?>" class="btn btn-warning">
                                                            Edit
                                                        </a>
                                                        
                                                        <a href="#" onclick="konfirmasiHapus('<?php echo $data['no_laporan']; ?>')" class="btn btn-danger">
                                                            Hapus
                                                        </a>
                                                        <script>
                                                            function konfirmasiHapus(no_laporan) {
                                                                var konfirmasi = confirm('Apakah Anda yakin ingin menghapus data dengan nomor laporan ' + no_laporan + '?');

                                                                if (konfirmasi) {
                                                                    // jika OK, maka arahkan ke halaman penghapusan
                                                                    window.location.href = 'riwayat_hapus.php?no_laporan=' + no_laporan;
                                                                } else {
                                                                    // jika Batal, tidak lakukan apa-apa
                                                                }
                                                            }
                                                        </script>


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
             <!-- End of Content Wrapper -->
            <footer class="fotbar fotbar-expand fotbar-light bg-white botbar mb-4 static-bot shadow">
    
            </footer>
    </div>
    <!-- End of Page Wrapper -->
    
    
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
