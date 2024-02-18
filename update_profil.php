<?php
session_start();

// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

// pemberitahuan error
error_reporting(E_ALL);
ini_set('display_errors', 1);
if (isset($_GET['message'])) {
    $message = urldecode($_GET['message']);
    echo "<p>$message</p>";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Jika tombol Ganti Profil diklik
    if (isset($_POST["ganti_profil"])) {
        // Upload gambar profil baru
        $file_name = $_FILES['foto_profil']['name'];
        $file_tmp = $_FILES['foto_profil']['tmp_name'];
        move_uploaded_file($file_tmp, "path/to/" . $file_name);

        // Perbarui path foto profil di database
        $id_pelapor = $_SESSION['id_pelapor'];
        $query_update_profil = "UPDATE pelapor SET foto_profil_path = 'path/to/$file_name' WHERE id_pelapor = '$id_pelapor'";
        mysqli_query($koneksi, $query_update_profil);

        // Redirect kembali ke halaman profil
        header("Location: fitur_profil.php");
    }


    // Jika tombol Simpan Perubahan diklik
    if (isset($_POST["simpan_perubahan"])) {
        $id_pelapor = $_SESSION['id_pelapor'];

        // Perbarui kata sandi jika diisi
        if (!empty($_POST['kata_sandi'])) {
            $kata_sandi_baru = password_hash($_POST['kata_sandi'], PASSWORD_DEFAULT);
            $query_update_kata_sandi = "UPDATE pelapor SET kata_sandi = '$kata_sandi_baru' WHERE id_pelapor = '$id_pelapor'";
            mysqli_query($koneksi, $query_update_kata_sandi);
        }

        // Perbarui email jika diisi
        if (!empty($_POST['email'])) {
            $email_baru = $_POST['email'];
            $query_update_email = "UPDATE pelapor SET email = '$email_baru' WHERE id_pelapor = '$id_pelapor'";
            mysqli_query($koneksi, $query_update_email);
        }

        // Perbarui nomor handphone jika diisi
        if (!empty($_POST['no_handphone'])) {
            $no_handphone_baru = $_POST['no_handphone'];
            $query_update_no_handphone = "UPDATE pelapor SET no_handphone = '$no_handphone_baru' WHERE id_pelapor = '$id_pelapor'";
            mysqli_query($koneksi, $query_update_no_handphone);
        }

        // Redirect kembali ke halaman profil
        header("Location: fitur_profil.php");
        exit();
    }
}

// Menutup koneksi
mysqli_close($koneksi);
?>
