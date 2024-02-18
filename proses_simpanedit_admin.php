<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$id_admin=$_POST['id_admin'];
$nama_admin=$_POST['nama_admin'];
$kata_sandi=$_POST['kata_sandi'];
$no_handphone=$_POST['no_handphone'];
$email=$_POST['email'];
$level=$_POST['level'];

$sql=mysqli_query($koneksi, "UPDATE admin SET nama_admin='$nama_admin', kata_sandi='$kata_sandi', no_handphone='$no_handphone', email='$email', level='$level' WHERE id_admin='$id_admin' ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Diubah');
    window.location='data_admin.php';
</script>
<?php
}
?>