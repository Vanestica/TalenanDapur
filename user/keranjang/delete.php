<?php
include "koneksi.php";

$notemp = $_GET['notemp'];
$sql = "delete from tbkeranjang where notemp='$notemp'";
$query = mysqli_query($con,$sql);
header("location:keranjang.php");
?>