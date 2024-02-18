<?php
session_start();
$koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

$tgl_laporan = date('Y-m-d');
$id_pelapor = $_POST['id_pelapor'];
$nama_pelapor = isset($_POST['nama_pelapor']) ? $_POST['nama_pelapor'] : ''; 
$kategori_laporan = $_POST['kategori_laporan'];
$deskripsi_laporan = $_POST['deskripsi_laporan'];
$status_laporan = 0;


$anonim = isset($_POST['anonim']) ? 1 : 0;

// jika checkbox anonim dicentang,nama pelapor menjadi "Anonim"
if ($anonim) {
    $nama_pelapor = "Anonim";
}

// memeriksaa apakah ada file yang diunggah
if (!empty($_FILES['bukti']['name'])) {
    $ekstensi_syarat = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx', 'txt');
    $bukti = $_FILES['bukti']['name'];
    $file_tmp = $_FILES['bukti']['tmp_name'];
    $angka_acak = rand(1, 999);
    $ekstensi = strtolower(pathinfo($bukti, PATHINFO_EXTENSION));
    $nama_bukti_baru = $angka_acak . '-' . $bukti;

    // Cek  ekstensi  dari file 
    if (in_array($ekstensi, $ekstensi_syarat)) {
        // memindahkan file ke folder bukti
        move_uploaded_file($file_tmp, 'bukti/' . $nama_bukti_baru);

        //  menyimpan laporan ke dalam tabel
        $query = "INSERT INTO laporan (tgl_laporan, id_pelapor, nama_pelapor, kategori_laporan, deskripsi_laporan, bukti, status_laporan, anonim)
                  VALUES ('$tgl_laporan', '$id_pelapor', '$nama_pelapor', '$kategori_laporan', '$deskripsi_laporan', '$nama_bukti_baru', '$status_laporan', '$anonim')";
    } else {
        echo "<script>alert('Ekstensi file tidak valid. Silakan unggah file dengan ekstensi: " . implode(', ', $ekstensi_syarat) . "');</script>";
    }
    
} else {
    // Kasus ketika tidak ada file yang diunggah
    $query = "INSERT INTO laporan (tgl_laporan, id_pelapor, nama_pelapor, kategori_laporan, deskripsi_laporan, status_laporan, anonim)
              VALUES ('$tgl_laporan', '$id_pelapor', '$nama_pelapor', '$kategori_laporan', '$deskripsi_laporan', '$status_laporan', '$anonim')";
}

    // Eksekusi query
    $result = mysqli_query($koneksi, $query);

    // Periksa apakah query berhasil dijalankan
    if (!$result) {
        die("query error: " . mysqli_error($koneksi) . "-" . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil dikirim, Terimakasih sudah menulis laporan ');window.location='pelapor.php';</script>";
    }

mysqli_close($koneksi);
?>