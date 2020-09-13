<?php
include "koneksi.php";

$kodeitem = $_POST['kodeitem'];
$gambar1 = $_POST['gambar1'];
$nama = $_POST['nama'];
$harga = $_POST['harga'];
$kuantitas = $_POST['kuantitas'];
$satuan = $_POST['satuan'];
$save = $_POST['save'];


if($save === "save"){
	$sql = "insert into wishlist
			(kodeitem, gambar1, nama, harga, kuantitas,satuan)
			values('$kodeitem','$gambar1','$nama','$harga','$kuantitas','$satuan')";
}
else {
	$sql = "update favorit set
		nama='$nama', harga='$harga',satuan='$satuan', image='$image' where kodeitem='$kodeitem'";
}

$query = mysqli_query($con,$sql);
header("location:../beranda/beranda.php");
?>