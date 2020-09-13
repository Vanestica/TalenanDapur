<?php
include "../koneksi.php";

header('Content-Type: application/json');

$sqlQuery = "SELECT MONTH(tgl) AS bulan, COUNT(*) AS jumlah FROM tbtransaksi GROUP BY MONTH(tgl)";
$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>