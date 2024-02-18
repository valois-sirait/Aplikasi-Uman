<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

$koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

// Mengambil nomor laporan terakhir dari tabel
$query_last_laporan = "SELECT MAX(no_laporan) AS nomor_laporan_terakhir FROM laporan";
$result_last = mysqli_query($koneksi, $query_last_laporan);
$row_last = mysqli_fetch_assoc($result_last);

// nomor laporan di form = nomor laporan terakhir + 1
$nomor_laporan_baru = $row_last ? $row_last['nomor_laporan_terakhir'] + 1 : 1;
 
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

    <title>Fitur Lapor</title>

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

        .form-control { 
            color : black; 
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
            height: 74px; /*  tinggi  */ 
        }
        
        form {
            background-color: #ffffb7;
        }

        ul li:hover a {
            padding-left: 100px;
            background: #408ddb;
            color: rgb(121, 221, 81);

        }

        @media (max-width: 767px) {
            body {
                width: 100%;
                font-size: 14px;
                color: #1135A2;
                font-weight: bold; 
            }

            .container-fluid {
                padding: 1px;
                padding-top: 1px;
            }

            .navbar {
                background-color: #4268D6;
                margin-left: 1px;
                margin-right: 1px;
                border-radius: 5px;
                font-weight: bold;
                color: white;
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
                <nav class="navbar  navbar-light topbar mb-4 static-top shadow">
                    <h5 style="font-weight: bold;">LAPORKAN TINDAKAN</h5>
                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Your Form Content Goes Here -->
                    <div class="card shadow">
                        <form  method="post" action="simpan_laporan.php" enctype="multipart/form-data">
                            <div class="col-md-12"> 
                                <br>
                                <div>
                                    No Laporan
                                    <input style="background-color:#ddd; border: 1px solid #2B65EC;" type="text" name="no_laporan" class="form-control" value="<?php echo $nomor_laporan_baru; ?>" readonly>
                                </div>

                                <br>

                                <div >
                                    Kategori Laporan
                                    <select style="border: 1px solid #2B65EC;" name="kategori_laporan" class="form-control" required>
                                        <option value="">-Pilih Jenis Kasus-</option>
                                        <option value="Pelecehan Seksual">Pelecehan Seksual</option>
                                        <option value="Penyalahgunaan Narkoba">Penyalahgunaan Narkoba</option>
                                        <option value="Perundungan">Perundungan</option>
                                        <option value="Pungutan Liar">Pungutan Liar</option>
                                    </select>
                                </div>

                                <br>

                                <div>
                                    Tanggal Lapor
                                    <input style="background-color:#ddd; border: 1px solid #2B65EC;" type="text" name="tgl_laporan" value="<?php echo date('d/m/Y'); ?>" class="form-control" readonly>
                                </div>

                                <br>

                                
                                <div>
                                    Id Pelapor
                                    <input style="background-color:#ddd; border: 1px solid #2B65EC;" type="text" name="id_pelapor" class="form-control" value="<?php echo $_SESSION['id_pelapor'];?>" readonly> 
                                </div>

                                <br>

                                <div>
                                    Nama Pelapor
                                    <input style="background-color:#ddd; border: 1px solid #2B65EC;" type="text" name="nama_pelapor" class="form-control" value="<?php echo $_SESSION['nama_pelapor'];?>" readonly>
                                </div>                          
                                <div>
                                <label>
                                    <input type="checkbox" name="anonim"> Anonim (Samarkan Identitas)
                                </label>
                                </div>
                                
                                <br>

                                <div>
                                Deskripsi Laporan
                                <textarea style="border: 1px solid #2B65EC;" class="form-control" rows="7" name="deskripsi_laporan" required></textarea>
                                </div>

                                <br>

                                <fieldset>
                                <legend>Bukti</legend> 
                                <div>
                                    <label>Unggah Bukti Pendukung</label>
                                    <input style="border-color:#979DFF;" type="file" name="bukti" class="form-control" accept=".jpg, .jpeg, .png, .gif .pdf, .doc, .docx" multiple>
                                    <font color="red"> *tipe file yang bisa diupload adalah : .jpg, .jpeg, .png, .pdf, .doc, .docx</font>
                                </div> 
                                </fieldset>

                                <!-- ... (other form fields) ... -->

                                <div>
                                    <input type="submit" value="Kirim" class="btn btn-primary">
                                    <input type="reset" value="Kosongkan" class="btn btn-warning">
                                </div>
                                <br>
                            </div>     
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
