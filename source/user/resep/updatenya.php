<?php
include "koneksi.php";

$koderesep = $_POST['koderesep'];
$judul = $_POST['judul'];
$lama = $_POST['lama'];
$tingkat = $_POST['tingkat'];
$porsi = $_POST['porsi'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$oleh = $_POST['oleh'];

$deskripsi = $_POST['deskripsi'];

	$sql = "update resep set
			judul='$judul', lama='$lama', tingkat='$tingkat', porsi='$porsi', oleh='$oleh', gambar='$file', deskripsi='$deskripsi'
			where koderesep='$koderesep'";
			
$query = mysqli_query($con,$sql);
header("location:resep.php");
?>