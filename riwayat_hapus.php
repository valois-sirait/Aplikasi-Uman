<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$no_laporan = $_GET['no_laporan'];

$sql = mysqli_query($koneksi, "DELETE FROM laporan WHERE no_laporan='$no_laporan'");

if ($sql)
{
    ?>
    <script type="text/javascript">
    alert('Data Berhasil Di Hapus');
    window.location="fitur_riwayatlaporan.php";
    </script>
    <?php
}
?>