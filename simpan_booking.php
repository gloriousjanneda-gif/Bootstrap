<?php
header('Content-Type: application/json');
require_once 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_lengkap   = mysqli_real_escape_string($conn, $_POST['nama_lengkap'] ?? '');
    $nomor_whatsapp = mysqli_real_escape_string($conn, $_POST['nomor_whatsapp'] ?? '');
    $tipe_motor     = mysqli_real_escape_string($conn, $_POST['tipe_motor'] ?? '');
    $kategori_cc    = mysqli_real_escape_string($conn, $_POST['kategori_cc'] ?? '');
    $jenis_layanan  = mysqli_real_escape_string($conn, $_POST['jenis_layanan'] ?? '');
    $tanggal_booking= mysqli_real_escape_string($conn, $_POST['tanggal_booking'] ?? '');
    $catatan        = mysqli_real_escape_string($conn, $_POST['catatan'] ?? '');

    if (!empty($nama_lengkap) && !empty($nomor_whatsapp) && !empty($tipe_motor) && !empty($jenis_layanan)) {
        $tgl_value = !empty($tanggal_booking) ? "'$tanggal_booking'" : "NULL";
        $catatan_value = !empty($catatan) ? "'$catatan'" : "NULL";

        $sql = "INSERT INTO bookings (nama_lengkap, nomor_whatsapp, tipe_motor, kategori_cc, jenis_layanan, tanggal_booking, catatan) 
                VALUES ('$nama_lengkap', '$nomor_whatsapp', '$tipe_motor', '$kategori_cc', '$jenis_layanan', $tgl_value, $catatan_value)";

        if (mysqli_query($conn, $sql)) {
            echo json_encode(['status' => 'success', 'message' => 'Booking berhasil disimpan ke database!']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Gagal menyimpan: ' . mysqli_error($conn)]);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Harap isi semua field wajib!']);
    }
}
?>