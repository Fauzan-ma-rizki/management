<?php
include 'config.php';

header('Content-Type: application/json');

$query = mysqli_query($conn, "SELECT * FROM transaksi ORDER BY tanggal DESC");
$data = [];

while($row = mysqli_fetch_assoc($query)) {
    $data[] = $row;
}

echo json_encode($data);
?>