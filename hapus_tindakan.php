<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$nokode_tindakan=$_GET['nokode_tindakan'];

$sql=mysqli_query($koneksi,"DELETE FROM tindakan WHERE nokode_tindakan='$nokode_tindakan' ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Dihapus');
    window.location='data_tindakan.php';
    </script>
    <?php
    }
    ?>