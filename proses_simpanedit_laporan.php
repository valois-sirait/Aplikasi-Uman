<?php
$koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

$no_laporan = mysqli_real_escape_string($koneksi, $_POST['no_laporan']);
$tgl_laporan = mysqli_real_escape_string($koneksi, $_POST['tgl_laporan']);
$deskripsi_laporan = mysqli_real_escape_string($koneksi, $_POST['deskripsi_laporan']);

// Cek apakah ada file yang diunggah
if ($_FILES['bukti']['size'] > 0) {
    $bukti = $_FILES['bukti']['name'];
    $file_tmp = $_FILES['bukti']['tmp_name'];
    $angka_acak = rand(1, 999);
    $ekstensi = strtolower(pathinfo($bukti, PATHINFO_EXTENSION));
    $update_bukti_baru = $angka_acak . '-' . $bukti;
    move_uploaded_file($file_tmp, 'bukti/' . $update_bukti_baru);
} else {
    // Jika tidak ada file yang diunggah, gunakan bukti yang sudah ada
    $update_bukti_baru = $_POST['bukti_lama'];
}

$query = "UPDATE laporan SET tgl_laporan='$tgl_laporan', deskripsi_laporan='$deskripsi_laporan', bukti='$update_bukti_baru' WHERE no_laporan='$no_laporan'";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query error: " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data Berhasil Di Update');window.location='fitur_riwayatlaporan.php';</script>";
}

mysqli_close($koneksi);
?>
