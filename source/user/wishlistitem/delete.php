<?php
include "koneksi.php";

$kodeitem = $_GET['kodeitem'];
$sql = "delete from favorit where kodeitem='$kodeitem'";
$query = mysqli_query($con,$sql);
header("location:../beranda/beranda.php");
?>