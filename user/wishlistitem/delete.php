<?php
include "koneksi.php";

$kodeitem = $_GET['kodeitem'];
$sql = "delete from tbwishlist where kodeitem='$kodeitem'";
$query = mysqli_query($con,$sql);
header("location:../wishlistitem/wishlistitem.php");
?>