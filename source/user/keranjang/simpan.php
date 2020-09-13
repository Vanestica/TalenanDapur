<?php
	include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$image = $_POST['image'];
$price = $_POST['price'];
$banyak = $_POST['banyak'];
$total = $_POST['total'];

	$sql = "insert into tbl_product2 (id,nama,image,price,banyak,total) values ('$id','$nama','$image','$price','$banyak','$total')";
	$query = mysqli_query($con,$sql);

header("location:keranjang.php");
?>