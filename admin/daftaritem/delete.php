<?php
include "../koneksi.php";

$kodeitem = $_GET['kodeitem'];
$sql = "delete from tbbarang where kodeitem='$kodeitem'";
$query = mysqli_query($con,$sql);
header("location:daftaritem.php");
?>