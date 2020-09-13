<?php
include "../koneksi.php";

$kodeuser = $_GET['kodeuser'];
$sql = "delete from tbakun where kodeuser='$kodeuser'";
$query = mysqli_query($con,$sql);
header("location:daftarakun.php");
?>