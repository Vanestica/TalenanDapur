<?php
	include "koneksi.php";

$sql = "select * from tbtransaksi";
$query = mysqli_query($con, $sql);
$num = mysqli_num_rows($query)+1;
$no = "TR-".$num;

$kodeitem = $_POST['kodeitem'];
$namaitem = $_POST['namaitem'];
$total = $_POST['total'];
$totalkuantitas = $_POST['totalkuantitas'];
$satuan = $_POST['satuan'];

	$sql = "insert into tbkeranjang (no,kodeitem,namaitem,total,totalkuantitas,satuan) values('$no','$kodeitem','$namaitem','$total','$totalkuantitas','$satuan')";

$query = mysqli_query($con,$sql);
header("location:../itemdetil/itemdetil.php?kodeitem=$kodeitem");

?>