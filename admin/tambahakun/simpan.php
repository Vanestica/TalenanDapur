<?php
include "../koneksi.php";

$nama = $_POST["nama"];
$email = $_POST["email"];
$password = $_POST["password"];
$password = md5($password);
$notelp = $_POST["notelp"];
$alamat = $_POST["alamat"];
$tipe = $_POST["tipe"];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

$sql = "insert into tbakun
		(nama, email, password, notelp, alamat, tipe, gambar)
		values('$nama','$email','$password','$notelp','$alamat','$tipe','$file')";
$query = mysqli_query($con,$sql);

header("location:tambahakun.php");

?>