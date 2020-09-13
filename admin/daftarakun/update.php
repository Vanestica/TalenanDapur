<?php
include "../koneksi.php";

$kodeuser = $_POST["kodeuser"];
$nama = $_POST["nama"];
$email = $_POST["email"];
$notelp = $_POST["notelp"];
$alamat = $_POST["alamat"];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

if(!empty($file))
{
	$sql = "update tbakun set
		nama='$nama', email='$email', notelp='$notelp', alamat='$alamat', gambar='$file'
		where kodeuser='$kodeuser'";
	$query = mysqli_query($con,$sql);
}
else 
{
	$sql = "update tbakun set
		nama='$nama', email='$email', notelp='$notelp', alamat='$alamat'
		where kodeuser='$kodeuser'";
	$query = mysqli_query($con,$sql);
}

header("location:daftarakun.php");
?>