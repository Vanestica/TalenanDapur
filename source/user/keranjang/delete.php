<?php
include "koneksi.php";

$id = $_POST['id'];
$sql = "delete from tbl_product where id='$id'";
$query = mysqli_query($con,$sql);
header("location:keranjang.php");
?>