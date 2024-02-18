<?php
require_once('tcpdf/tcpdf.php');

// Dapatkan detail laporan dari database menggunakan $_GET['no_laporan']
if (isset($_GET['no_laporan'])) {
    $no_laporan = $_GET['no_laporan'];

    // Ambil detail laporan dari database (Anda perlu mengimplementasikan ini)
    $koneksi = mysqli_connect("localhost", "root", "", "uman") or die(mysqli_connect_error());
    $sql = mysqli_query($koneksi, "SELECT * FROM laporan WHERE no_laporan = '$no_laporan'");
    $data = mysqli_fetch_assoc($sql);

    // Generate PDF
    $pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);

    // Set margin
    $pdf->SetMargins(25, 20, 25, 20);

    // Add a page
    $pdf->AddPage();

    // Header (Kepala Surat)
    $pdf->SetFont('times', 'B', 18);
    $pdf->Cell(0, 5, 'UMAN (Universitas Aman)', 0, 1, 'C');
    $pdf->Ln(5);
    $pdf->Image('logo/umanhead.jpg', 15, 14, 50);
    $pdf->SetFont('times', 'B', 10);
    $pdf->Cell(0, 5, 'Aplikasi Pelaporan Terhadap Tindakan Pelecehan Seksual, Penyalahgunaan Narkoba, Pungutan Liar dan Perundungan', 0, 1, 'C');
    $pdf->Cell(0, 5, 'di Universitas Katolik Santo Thomas', 0, 1, 'C');
    $pdf->Ln(3);
    $pdf->SetFont('times', 'I', 11);
    $pdf->Cell(0, 5, 'Jl. Setia Budi No.479, Tj. Sari, Kec. Medan Selayang, Kota Medan, Sumatera Utara 20133', 0, 1, 'C');
    $pdf->SetLineWidth(1.5);
    $pdf->Line(15, 55, 195, 55);
    $pdf->Ln(10);


    $pdf->SetFont('times', 'B', 14);
    $pdf->SetLeftMargin(15);
    $pdf->Cell(0, 10, 'LAPORAN', 0, 1, 'C');
    $pdf->Ln(15);

    // Data Laporan
    $pdf->SetFont('times', 'B', 12);
    $labelWidth = 50; // Panjang kolom untuk label
    $valueWidth = 80; // Panjang kolom untuk nilai

    $pdf->Cell($labelWidth, 10, 'NOMOR LAPORAN', 0, 0);
    $pdf->Cell($valueWidth, 10, ': ' . $data['no_laporan'], 0, 1);

    $pdf->Cell($labelWidth, 10, 'TANGGAL', 0, 0);
    $pdf->Cell($valueWidth, 10, ': ' . $data['tgl_laporan'], 0, 1);

    $pdf->Cell($labelWidth, 10, 'ID PELAPOR', 0, 0);
    $pdf->Cell($valueWidth, 10, ': ' . $data['id_pelapor'], 0, 1);

    $pdf->Cell($labelWidth, 10, 'NAMA PELAPOR', 0, 0);
    $pdf->Cell($valueWidth, 10, ': ' . $data['nama_pelapor'], 0, 1);

    $pdf->Cell($labelWidth, 10, 'KATEGORI LAPORAN', 0, 0);
    $pdf->Cell($valueWidth, 10, ': ' . $data['kategori_laporan'], 0, 1);

    // Deskripsi Laporan
    $pdf->SetFont('times', 'B', 12);
    $pdf->Cell(0, 10, 'DESKRIPSI LAPORAN     : ', 0, 1);
    $pdf->SetFont('times', '', 12);

    // MultiCell dengan alignment kiri
    $pdf->MultiCell(0, 10, $data['deskripsi_laporan'], 0, 'L');

    // Tambahkan gambar bukti
    $pdf->Ln(20);
    $pdf->SetFont('times', 'B', 12);
    $pdf->Cell(0, 10, 'BUKTI PENDUKUNG: ', 0, 1);
    $pdf->Image('bukti/' . $data['bukti'], 15, $pdf->GetY(), 40); // Sesuaikan dengan tata letak yang diinginkan

    // Tambahkan baris kosong sebagai pemisah
    $pdf->Ln(23);

    // Tambahkan rekomendasi atau petunjuk lanjutan
    $pdf->SetLeftMargin(15);
    $pdf->Ln(18);
    $pdf->SetFont('times', 'B', 12);
    $pdf->Cell(0, 10, 'Rekomendasi Tindak Lanjut:', 0, 1);
    $pdf->SetFont('times', '', 12);

    // MultiCell dengan alignment kiri
    $pdf->MultiCell(0, 7, 'Berdasarkan laporan ini, kami merekomendasikan tindakan lanjutan sebagai berikut:', 0, 'L');
    $pdf->MultiCell(0, 7, '- Melakukan investigasi lebih lanjut terkait laporan ini.', 0, 'L');
    $pdf->MultiCell(0, 7, '- Mengumpulkan informasi tambahan jika diperlukan.', 0, 'L');
    $pdf->MultiCell(0, 7, '- Menghubungi pihak terkait untuk koordinasi.', 0, 'L');

    $pdf->SetFont('times', 'B', 14);
    $pdf->MultiCell(0, 8, '                                                                                                                         UMAN.', 0, 'L');
    // Outputkan PDF sebagai unduhan
    $pdf->Output('Laporan_' . $data['no_laporan'] . '.pdf', 'I');
    } else {
        // Tangani kasus di mana no_laporan tidak disediakan
        echo 'Tidak ada laporan yang ditentukan.';
    }
    ?>
