<?php
session_start();

// untuk Memeriksa apakah pengguna sudah login
if (!isset($_SESSION['id_pelapor'])) {
    header("Location: login.php"); // Redirect ke halaman login jika belum login
    exit();
}

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

// Ambil data pengguna dari database
$id_pelapor = $_SESSION['id_pelapor'];
$query = mysqli_query($koneksi, "SELECT * FROM pelapor WHERE id_pelapor = '$id_pelapor'");
$data_pelapor = mysqli_fetch_assoc($query);

// Menutup koneksi
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

    <title>Fitur Profil</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body { 
            color: #1135A2 ; 
            font-weight: bold;
        }

        p {
            margin: 6; 
            padding: 4px; 
            border-radius: 5px; 
            border: 2px solid #1135A2 ; 
            background-color: #ddd; 
            font-size: 16px;
        }

        .atur { 
            display: inline-block; 
            width: 100px;
        }


        form {
            display: grid; 
            gap: 10px;
            margin-top: 20px;
        }

        label {
            text-align: right;
            padding-right: 10px;
        }

        input { 
            width: 100%;
        }

        .card-header { 
            background-color: #ffffb7;
        }

        .bingkai { 
            border-radius: 50%;
            border: 2px solid #1135A2;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            max-width: 230px; 
            min-width: 100px; 
            width: 100%; 
            height: 230px; 
            display: block;
            margin: 0 auto;  
        } 

        .headtext {
            font-weight: bold;
        }

        .navbar {
            background-color: #4268D6;
            margin-left: 23px;
            margin-right: 23px;
            border-radius: 5px;
            font-size: 20px;
            text-align: center;
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

        /* untuk tampilan mobile dengan width < 767 pixels */
        @media (max-width: 767px) {

            body {
                width: 100%;
                font-size: 14px;    
            }

            .col-md-4, .col-md-8 {
                width: 100%;
            }

            .container {
                padding: 1px;
                padding-top: 1px;
                margin-top: 0;
            }

            p {
                margin: 2px; 
                padding: 2px; 
                border-radius: 5px; 
                border: 2px solid #1135A2 ; 
                background-color: #ddd; 
                font-size: 10px;
                margin-left: 0;      
            }

            .atur { 
                display: inline-block;
                width: 25px;
                font-size: 8px;
            }

            .bingkai { 
                border-radius: 50%;
                border: 2px solid #1135A2;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
                max-width: 100px; 
                min-width: 100px; 
                width: 100%; 
                height: 100px; 
                display: block;
                margin: 0 auto;  
            }

            .headtext {
                font-weight: bold;
                font-size: 10px;
            }

            .btn {
                font-size: 10px;
                display: inline-block;
                width: auto;
                height: auto;
            }

            .navbar {
                background-color: #4268D6;
                margin-left: 1px;
                margin-right: 1px;
                border-radius: 5px;
                font-weight: bold;
                color: white;
                margin-bottom: 0;
            }
        
        }
    </style>

</head>

<body id="page-top">

    <div id="wrapper"> 

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
                <nav class="navbar  navbar-light mb-2 static-top shadow">
                    PROFILE
                </nav>
        
                <div class="container">
 
                    <form method="post" action="update_profil.php" enctype="multipart/form-data"  class="card shadow">
                        <div class="card-header">
                            <h4 class="headtext">INFORMASI PROFIL</h4>
                            
                                    <!-- kartu -->
                                    <div class="col-xl-12col-md-6 mb-4">
                                        <div class="card shadow h-100 py-0">
                                            <div class="card-body" style="background-color:#5CB5FB;border-radius: 5px;">
                                                <div class="row no-gutters align-items-center">
                                                    <div class="col mr-0">
                                                        <div class="text-xl font-weight-bold  text-capitalize mb-0">
                                                            <div>                          
                                                                <div>
                                                                    <div class="row">
                                                                        <div class="col-md-4">
                                                                            <img src="<?php echo isset($data_pelapor['foto_profil_path']) ? $data_pelapor['foto_profil_path'] : 'path/to/default_profile.jpg'; ?>" alt="Foto Profil" class="bingkai"> 
                                                                            <br>
                                                                            <label for="foto_profil">UPLOAD FOTO PROFIL</label>
                                                                            <input type="file" name="foto_profil" accept=".jpg, .jpeg, .png">
                                                                            <br><br>
                                                                            <button type="submit" name="ganti_profil" class="btn btn-warning">Ganti Profil</button>
                                                                            <br>
                                                                        </div>
                                                                        <div class="col-md-8">
                                                                            <p><span class="atur">Status</span>: <?php echo $data_pelapor['status']; ?></p>
                                                                            <p><span class="atur">ID </span>: <?php echo $data_pelapor['id_pelapor']; ?></p>
                                                                            <p><span class="atur">Nama </span>: <?php echo $data_pelapor['nama_pelapor']; ?></p>
                                                                            <p><span class="atur">Email</span>: <?php echo $data_pelapor['email']; ?></p>
                                                                            <p><span class="atur">No.Hp</span>: <?php echo $data_pelapor['no_handphone']; ?></p>
                                                                        </div>  
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                        
                                    <div>
                                    <label for="kata_sandi">Ubah Kata Sandi:</label>
                                        <input style="border-color:#979DFF; border-radius: 5px;" type="password" name="kata_sandi">
                                    </div>
    
                                    <div >
                                        <label for="email">Ubah Email:</label>
                                        <input style="border-color:#979DFF; border-radius: 5px;" type="email" name="email">
                                    </div>

                                    <div>
                                        <label for="no_handphone">Ubah Nomor Handphone:</label>
                                        <input style="border-color:#979DFF; border-radius: 5px;" type="text" name="no_handphone">
                                    </div>
                                    <br>

                                    <div > 
                                    <button type="submit" name="simpan_perubahan" class="btn btn-primary">Simpan Perubahan</button>
                                    </div>
                        </div>

                    </form>

                </div>

            </div>

        </div>





        
    </div>

    
</body>

</html>
