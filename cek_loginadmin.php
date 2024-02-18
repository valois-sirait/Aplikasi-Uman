<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","uman") or die (mysqli_connect_error());
$nama_admin = $_POST['nama_admin'];
$kata_sandi = $_POST['kata_sandi'];

$sql = mysqli_query($koneksi,"SELECT * FROM admin WHERE nama_admin='$nama_admin' and kata_sandi='$kata_sandi' ");
$cek = mysqli_num_rows($sql);

if($cek>0)
{
    $data = mysqli_fetch_array($sql);
    session_start();
    $id_admin = $data['id_admin'];
	$nama_admin = $data['nama_admin'];
    $_SESSION['id_admin']=$id_admin;
    $_SESSION['nama_admin']=$nama_admin;
    $_SESSION['level']=$data['level'];
    header('location:admin.php');
}
else
{
    ?>
    <script type="text/javascript">
    alert('Nama Admin Atau Kata Sandi Salah');
    window.location="index2.php";
    </script>
    <?php
}
?>