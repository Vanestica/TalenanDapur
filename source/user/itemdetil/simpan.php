<?php
	include "koneksi.php";

$notransaksi = $_POST['notransaksi'];
$kodeitem = $_POST['kodeitem'];
$namaitem = $_POST['namaitem'];
$gambar1 = $_POST['gambar1'];
$total = $_POST['total'];
$kuantitas = $_POST['kuantitas'];
$satuan = $_POST['satuan'];

	$sql = "insert into tbkeranjang (kodeitem,namaitem,gambar,harga,kuantitas,satuan) values('$kodeitem','$namaitem','$gambar1','$total','$kuantitas','$satuan')";

$query = mysqli_query($con,$sql);
header("location:itemdetil.php");

?>