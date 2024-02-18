<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());

$tgl_tindakan = date('Y-m-d');
$no_laporan = $_POST['no_laporan'];
$kategori_laporan = $_POST['kategori_laporan'];
$id_pelapor = $_POST['id_pelapor'];
$deskripsi_tindakan = $_POST['deskripsi_tindakan'];
$id_admin = $_POST['id_admin'];
$status_laporan = $_POST['status_laporan'];

$sql = mysqli_query($koneksi,"INSERT INTO tindakan (tgl_tindakan, no_laporan, kategori_laporan, id_pelapor, Deskripsi_tindakan, id_admin) VALUES ('$tgl_tindakan', '$no_laporan', '$kategori_laporan', '$id_pelapor', '$deskripsi_tindakan', '$id_admin') ");

$update_st = mysqli_query($koneksi,"UPDATE laporan SET status_laporan='$status_laporan' WHERE no_laporan='$no_laporan' ");

if ($sql && $update_st) {
    ?>
    <script type="text/javascript">
        alert ('Data Berhasil Ditanggapi');
        window.location="admin_verifikasi.php";
    </script>
    <?php
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi);
?>
