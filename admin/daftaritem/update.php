<?php
include "../koneksi.php";

$kodeitem = $_POST["kodeitem"];
$namaitem = $_POST["namaitem"];
$harga = $_POST["harga"];
$diskon = $_POST["diskon"];
$kuantitas = $_POST["kuantitas"];
$satuan = $_POST["satuan"];
$stock = $_POST["stock"];
$kategori = $_POST["kategori"];

$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

if(!empty($file))
{
	$sql = "update tbbarang set
		namaitem='$namaitem', harga='$harga', discount='$diskon', kuantitas='$kuantitas', satuan='$satuan', stock='$stock', kategori='$kategori', gambar1='$file'
		where kodeitem='$kodeitem'";
	$query = mysqli_query($con,$sql);
}
else 
{
	$sql = "update tbbarang set
		namaitem='$namaitem', harga='$harga', discount='$diskon', kuantitas='$kuantitas', satuan='$satuan', stock='$stock', kategori='$kategori'
		where kodeitem='$kodeitem'";
	$query = mysqli_query($con,$sql);
}

header("location:daftaritem.php");
?>