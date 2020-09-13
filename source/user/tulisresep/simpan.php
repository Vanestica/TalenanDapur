
<?php

include "koneksi.php";

$koderesep = $_POST['koderesep'];
$file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
$judul = $_POST['judul'];
$lama = $_POST['lama'];
$tingkat = $_POST['tingkat'];
$porsi = $_POST['porsi'];
$oleh = $_POST['oleh'];

$arraydeskripsi = array($_POST['bahan0'],$_POST['bahan1'],$_POST['bahan2'],$_POST['bahan3'],$_POST['bahan4'],$_POST['bahan5'],$_POST['bahan6'],$_POST['bahan7']);
$arraydeskripsi = array_filter($arraydeskripsi);
$deskripsi = implode(', ', $arraydeskripsi);

$arraykuantitas = array($_POST['kuantitas0'],$_POST['kuantitas1'],$_POST['kuantitas2'],$_POST['kuantitas3'],$_POST['kuantitas4'],$_POST['kuantitas5'],$_POST['kuantitas6'],$_POST['kuantitas7'],$_POST['kuantitas8'],$_POST['kuantitas9'],$_POST['kuantitas10']);
$arraykuantitas = array_filter($arraykuantitas);
$kuantitas = implode(', ', $arraykuantitas);

$arrayjenisberat = array($_POST['jenisberat0'],$_POST['jenisberat1'],$_POST['jenisberat2'],$_POST['jenisberat3'],$_POST['jenisberat4'],$_POST['jenisberat5'],$_POST['jenisberat6'],$_POST['jenisberat7'],$_POST['jenisberat8'],$_POST['jenisberat9'],$_POST['jenisberat10']);
$arrayjenisberat = array_filter($arrayjenisberat);
$jenisberat = implode(', ', $arrayjenisberat);

$arraybahan = array($_POST['bahan0'],$_POST['bahan1'],$_POST['bahan2'],$_POST['bahan3'],$_POST['bahan4'],$_POST['bahan5'],$_POST['bahan6'],$_POST['bahan7'],$_POST['bahan8'],$_POST['bahan9'],$_POST['bahan10']);
$arraybahan = array_filter($arraybahan);
$bahan = implode(', ', $arraybahan);

$alat = $_POST['alat'];
$langkah = $_POST['langkah'];

	$sql = "insert into resep
			(judul, gambar, lama, tingkat, porsi, oleh, deskripsi, kuantitas, jenisberat, bahan, alat, langkah)
			values('$judul','$file','$lama','$tingkat','$porsi','$oleh','$deskripsi','$kuantitas','$jenisberat','$bahan','$alat','$langkah')";


$query = mysqli_query($con,$sql);
header("location:../resep/resep.php");

?>

