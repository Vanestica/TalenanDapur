<?php
include "../koneksi.php";

$koderesep = $_GET['koderesep'];
$sql = "delete from resep where koderesep='$koderesep'";
$query = mysqli_query($con,$sql);
header("location:resep.php");
?>