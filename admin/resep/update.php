<?php
include "../koneksi.php";

$koderesep = $_POST["koderesep"];
$judul = $_POST["judul"];
$lama = $_POST["waktu"];
$tingkat = $_POST["tingkat"];
$porsi = $_POST["porsi"];
$oleh = $_POST["oleh"];
$bahan = $_POST["bahan"];
$alat = $_POST["alat"];
$langkah = $_POST["langkah"];
$kategori = $_POST["kategori"];

$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

if(!empty($file))
{
	$sql = "update resep set
		judul='$judul', lama='$lama', tingkat='$tingkat', porsi='$porsi', oleh='$oleh', gambar='$file', bahan='$bahan', alat='$alat', langkah='$langkah'
		where koderesep='$koderesep'";
	$query = mysqli_query($con,$sql);
}
else 
{
	$sql = "update resep set
		judul='$judul', lama='$lama', tingkat='$tingkat', porsi='$porsi', oleh='$oleh', bahan='$bahan', alat='$alat', langkah='$langkah'
		where koderesep='$koderesep'";
	$query = mysqli_query($con,$sql);
}

header("location:resep.php");
?>