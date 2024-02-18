
<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$nama_pengguna=$_POST['nama_pengguna'];
$kata_sandi=$_POST['kata_sandi'];

//menampilkan data dari tabel laporan dengan fungsi where
$sql=mysqli_query($koneksi,"SELECT * FROM pelapor WHERE nama_pengguna='$nama_pengguna' AND kata_sandi='$kata_sandi'");
$cek=mysqli_num_rows($sql);

if ($cek>0)
{
	$data=mysqli_fetch_array($sql);
	session_start();
	$id_pelapor = $data['id_pelapor'];
	$nama_pelapor = $data['nama_pelapor'];
	$_SESSION['nama_pelapor']=$nama_pelapor;
	$_SESSION['nama_pengguna']=$nama_pengguna;
	$_SESSION['id_pelapor']=$id_pelapor;
	header('location:pelapor.php');

}
else
{
	?>
	<script type="text/javascript">
	alert ('Username Atau Password Tidak Ditemukan');
	window.location="index.php";
	</script>
	<?php
}
?>