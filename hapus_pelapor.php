<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$id_pelapor=$_GET['id_pelapor'];

$sql=mysqli_query($koneksi,"DELETE FROM pelapor WHERE id_pelapor='$id_pelapor' ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='data_pengguna.php';
    </script>
    <?php
    }
    ?>