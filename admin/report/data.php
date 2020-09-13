<?php
include "../koneksi.php";

header('Content-Type: application/json');

$sqlQuery = "select wilayah, count(wilayah) tempat from tbtransaksi group by wilayah order by wilayah";
$result = mysqli_query($con,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($con);

echo json_encode($data);
?>