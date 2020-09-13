<?php
include "koneksi.php";

$kodeitem = $_POST['kodeitem'];
$gambar1 = $_POST['gambar1'];
$namaitem = $_POST['namaitem'];
$harga = $_POST['harga'];
$discount = $_POST['discount'];
$kuantitas = $_POST['kuantitas'];
$satuan = $_POST['satuan'];
$kategori = $_POST['kategori'];
$save = $_POST['save'];


if($save === "save"){
	$sql = "insert into tbwishlist
			(kodeitem, gambar, namaitem, harga, discount,kuantitas,satuan,kategori)
			values('$kodeitem','$gambar1','$namaitem','$harga','$kuantitas','$kuantitas','$satuan','kategori')";
}
else {
	$sql = "update favorit set
		nama='$nama', harga='$harga',satuan='$satuan', image='$image' where kodeitem='$kodeitem'";
}

$query = mysqli_query($con,$sql);
header("location:../beranda/beranda.php");
?>