<?php
// Gunakan data dari tombol 'Connect' di TiDB
$host = "gateway01.ap-southeast-1.prod.aws.tidbcloud.com"; 
$user = "2Lp15HxmqQYNvQv.root"; // Ganti dengan user kamu
$pass = "WKw9YtjWSRINJIV2";  // Ganti dengan password kamu
$db   = "test";
$port = 4000;

$conn = mysqli_init();
// TiDB Cloud butuh SSL
mysqli_ssl_set($conn, NULL, NULL, NULL, NULL, NULL);
mysqli_real_connect($conn, $host, $user, $pass, $db, $port);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>