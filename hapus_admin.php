<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$id_admin=$_GET['id_admin'];

$sql=mysqli_query($koneksi,"DELETE  FROM admin WHERE id_admin='$id_admin'");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='data_admin.php';
    </script>
    <?php
    }
    ?>