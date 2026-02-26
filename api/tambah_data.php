<?php
// Memanggil koneksi database
include 'config.php';

// Mengecek apakah ada data yang dikirim lewat metode POST
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $tgl = $_POST['tanggal'];
    $ket = $_POST['keterangan'];
    $jml = $_POST['jumlah'];
    $tipe = $_POST['tipe'];

    // Query SQL untuk memasukkan data ke tabel transaksi yang tadi kamu buat
    $sql = "INSERT INTO transaksi (tanggal, keterangan, jumlah, tipe) VALUES ('$tgl', '$ket', '$jml', '$tipe')";
    
    if (mysqli_query($conn, $sql)) {
        // Jika berhasil, otomatis pindah ke halaman utama (index.html)
        header("Location: ../index.html");
        exit();
    } else {
        echo "Wah, ada error nih: " . mysqli_error($conn);
    }
}
?>