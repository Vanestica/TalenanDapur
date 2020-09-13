<?php
include "../koneksi.php";

$nama = $_POST["nama"];
$harga = $_POST["harga"];
$diskon = $_POST["diskon"];
$kuantitas = $_POST["kuantitas"];
$satuan = $_POST["satuan"];
$kategori = $_POST["kategori"];
$stock = $_POST["stock"];
// $nutrisi = $_POST[""];
// $persen = $_POST[""];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

$sql = "insert into tbbarang
		(namaitem, harga, discount, kuantitas, satuan, kategori, stock, gambar1)
		values('$nama','$harga','$diskon','$kuantitas','$satuan','$kategori','$stock','$file')";
$query = mysqli_query($con,$sql);

header("location:tambahitem.php");

?>