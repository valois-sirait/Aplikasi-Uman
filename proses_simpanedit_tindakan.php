<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$nokode_tindakan=$_POST['nokode_tindakan'];
$tgl_tindakan = $_POST['tgl_tindakan'];
$deskripsi_tindakan=$_POST['deskripsi_tindakan'];



$update_st=mysqli_query($koneksi,"UPDATE tindakan SET tgl_tindakan='$tgl_tindakan', deskripsi_tindakan='$deskripsi_tindakan' where nokode_tindakan='$nokode_tindakan' ");
if ($update_st)
{
    ?>
    <script type="text/javascript">
        alert ('Data Sudah Diedit');
        window.location="data_tindakan.php";
    </script>
<?php
}

?>