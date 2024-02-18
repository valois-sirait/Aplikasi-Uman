<?php
$koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());

// Ambil data dari formulir
$id_pelapor=$_POST['id_pelapor'];
$nama_pelapor = $_POST['nama_pelapor'];
$email = $_POST['email'];
$no_handphone = $_POST['no_handphone'];
$nama_pengguna = $_POST['nama_pengguna'];
$kata_sandi = $_POST['kata_sandi'];
$foto_profil_path=0;
$status = $_POST['status'];

// prepared statement
$sql = mysqli_prepare($koneksi, "INSERT INTO pelapor (id_pelapor, nama_pelapor, email, no_handphone, nama_pengguna,kata_sandi, foto_profil_path, status) VALUES (?, ?, ?, ?, ?, ?, ?,?)");
mysqli_stmt_bind_param($sql, 'ssssssss', $id_pelapor, $nama_pelapor, $email, $no_handphone, $nama_pengguna, $kata_sandi, $foto_profil_path, $status);

// eksekusi statement
if (mysqli_stmt_execute($sql)) {
    ?>
    <script type="text/javascript">
        alert('Data Berhasil Disimpan, Silahkan Gunakan Untuk Login');
        window.location = "index.php";
    </script>
    <?php
} else {
    echo "Gagal menyimpan data: " . mysqli_error($koneksi);
}


// Tutup statement dan koneksi
mysqli_stmt_close($sql);
mysqli_close($koneksi);
?>
