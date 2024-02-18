<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Fitur Dukungan dan Bantuan</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-f6u2T5HR9ZyVqoTkVAiBlgMF5cHjLcjkkrRsLbUVe3Q77MUKbHrgpbrF7UNM9G1J" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            font-weight: bold;
            color: #1135A2;
        }

        .container-fluid {
            padding: 20px;
        }

        .navbar {
            background-color: #fff;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
        }

        .navbar h2 {
            margin: 0;
        }


        .card-body {
            padding: 20px;
            background-color: #ffffb7;
        }

        .table {
            width: 100%;
            margin-bottom: 2rem;
            background-color:;
            border-collapse: separate;
            color: #1135A5;
        }

        thead {
            white-space: nowrap;  
            color:#1135A5;
            text-align: justify;
            font-weight: bold;
            background-color:#5CB5FB;
        }

        tbody {
            background-color: #ffffb7;
            color:#1135A2;
        }

        .social-icons {
            text-align: center;
            margin-top: 20px;
        }

        .social-icons a {
            margin: 0 5px;
            font-size: 20px;
            color: #4e73df;
        }

        hr {
            margin: 20px 0;
            border: 0;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .navbar {
            background-color: #4268D6;
            margin-left: 23px;
            margin-right: 23px;
            border-radius: 5px;
            font-weight: bold;
            color: white;
        }

        .ministry {
            font-weight: bold;
            font-size: 22px;
            text-align: center;
        }
        .data {
            background-color: #5CB5FB;
        }

        @media (max-width: 767px) {

            .ministry {
                font-weight: bold;
                font-size: 8px;
                text-align: left;
            }

            .container-fluid {
                padding: 1px;
                padding-top: 25px;
            }

            .navbar {
                background-color: #4268D6;
                margin-left: 1px;
                margin-right: 1px;
                border-radius: 5px;
                font-weight: bold;
                color: white;
            }

            .judul {
                font-size: 16px;

            }
            
            .table {
                font-size: 10px;
                table-layout: fixed;
                width: 500px;
            }

        }
    </style>

<script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "e80efe6e-c335-477c-a8c7-17366740ac7d";

    function crispNotification() {
        $crisp.push(["do", "message:show", ["text", "Chat Kami Secara Langsung dengan Mengklik Icon Ini"]]);
    }

    (function () {
        var d = document;
        var s = d.createElement("script");
        s.src = "https://client.crisp.chat/l.js";
        s.async = 1;
        d.getElementsByTagName("head")[0].appendChild(s);
        
        // memanggil fungsi crispNotification ( 5000ms atau 5 detik)
        setTimeout(crispNotification, 5000);
    })();
</script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

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
            <nav class="navbar  navbar-light topbar mb-6 static-top shadow">
                <h5 class="judul" style="font-weight: bold;">BANTUAN DAN DUKUNGAN</h5> 
                <!-- Sidebar Toggle (Topbar) -->
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto"> 
                </ul>
            </nav>
                <!-- End of Topbar -->

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- konten atau isi dalam fitur dibuat disini-->
                    <div class="card shadow">
                        <div class="card-body ok">
                            <div>
                                <div>
                                            <div class="table-responsive">
                                                    <h5  class="ministry" style="text-align:justify;">CAMPUS MINISTRY UNIVERSITAS KATOLIK SANTO THOMAS MENYEDIAKAN LAYANAN KONSELING, LAYANAN KESEHATAN, PEMBINAAN KEBUTUHAN DAN PENGEMBANGAN ROHANI UNTUK DOSEN, TENAGA KEPENDIDIKAN, DAN MAHASISWA.</h5> 
                                                    
                                                    <center><img  src="img/campus.JPEG" width="900" height="500" class="mx-auto img-fluid" ></center>
                                                    <br>
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th width='5%' scope="col"></th>
                                                                <th width='40%' scope="col">Narasumber</th>
                                                                <th width='20%' scope="col">No Handphone</th>
                                                                <th width='35%' scope="col">Layanan</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="data">
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>RP.Gregoriuous Jeffrey Wibiksono, O.Carm</td>
                                                                <td>085960504361</td>
                                                                <td>Layanan Spritual</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>Yernita Sinaga, S.Tr.Keb</td>
                                                                <td>082168458857</td>
                                                                <td>Layanan Kesehatan</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">3</th>
                                                                <td>Sr.Ruminta Simamora, S.Psi., Psikolog.</td>
                                                                <td>081546169338</td>
                                                                <td>Layanan Layanan Psikologis/Konseling</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">4</th>
                                                                <td>Novenita Marpaung, S.Psi.</td>
                                                                <td>082320055540</td>
                                                                <td>Layanan Layanan Psikologis/Konseling</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    </div>                                          


                                    <form>
                                        <!-- Tampilkan video -->
                                        <hr>
                                        <h5>Video Seputar Aplikasi dan Cara Menggunakan Aplikasi</h5>
                                        <div class="embed-responsive embed-responsive-16by9 embed-responsive-md" style="border: 2px solid #ccc; border-radius: 8px;">
                                            <video width="200" height="125" controls>
                                                <source src="video/polimorphisme.mp4" type="video/mp4">
                                                Maaf, browser Anda tidak mendukung tag video.
                                            </video>
                                        </div>

                                        <hr>
                                        
                                        <!-- Ikons tautan -->
                                        <div class="col-xl-12col-md-6 mb-4">
                                        <div class="card shadow h-100 py-0">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                            <div class="col mr-0">
                                            <div class="text-xl font-weight-bold mb-0">
                                                <div class="social-icons">
                                                        <h4>Temukan Dukungan</h4>
                                                        <hr>
                                                        <a href="https://wa.me/1234567890" target="_blank" style="font-size: 37px;">
                                                            <i class="fab fa-whatsapp"></i> Whatsapp
                                                        </a>&nbsp;
                                                        <a href="https://www.instagram.com/unika.santothomas/" target="_blank" style="font-size: 37px;">
                                                            <i class="fab fa-instagram"></i> Instagram
                                                        </a>&nbsp;
                                                        <a href="https://www.youtube.com/" target="_blank" style="font-size: 37px;">
                                                            <i class="fab fa-youtube"></i> Youtube
                                                        </a>&nbsp;
                                                        <a href="https://www.gmail.com/" target="_blank" style="font-size: 37px;">
                                                            <i class="fab fa-google"></i> Gmail
                                                        </a>
                                                        <hr>
                                                    <div> 
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                        </div>   
                                    </form>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Page Content -->
                </div>
                <!-- End of Main Content -->
            </div>
        </div>
        <!-- End of Page Wrapper -->
    </body>

    </html>
