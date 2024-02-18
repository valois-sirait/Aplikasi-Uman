<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Logout Confirmation</title>
  <!-- jQuery Library (pastikan untuk menambahkan jQuery sebelum skrip di bawah) -->
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<?php
// Cek apakah ada notifikasi logout
if (isset($_GET['confirm']) && $_GET['confirm'] === 'yes') {
    unset($_SESSION['nama']);
    session_destroy();
    header('location:index2.php');
    exit();
}
?>

<script>
  $(document).ready(function(){
    // Menangani klik tombol keluar
    var logoutButton = confirm("Anda yakin ingin keluar?");
    
    // Jika pengguna menekan "OK", lakukan logout
    if (logoutButton) {
      // Redirect ke halaman utama dengan notifikasi konfirmasi
      window.location.href = "index2.php?confirm=yes";
    } else {
      // Pengguna memilih "Batal", kembali ke halaman
      window.location.href = "admin.php?confirm=NO";
    }
  });
</script>

</body>
</html>
