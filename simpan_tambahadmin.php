<?php
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$nama_admin=$_POST['nama_admin'];
$kata_sandi=$_POST['kata_sandi'];
$no_handphone=$_POST['no_handphone'];
$email=$_POST['email'];
$level=$_POST['level'];

$sql=mysqli_query($koneksi, "INSERT INTO admin (nama_admin, kata_sandi, no_handphone, email, level) VALUES ('$nama_admin','$kata_sandi','$no_handphone','$email','$level') ");

if ($sql)
{
?>
<script type="text/javascript">
    alert ('Data Berhasil Disimpan');
    window.location='data_admin.php';
</script>
<?php
}
?>