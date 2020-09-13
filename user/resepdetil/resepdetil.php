<?php
	include 'koneksi.php';
	session_start();
	$sql = "select * from resep";
	$query = mysqli_query($con, $sql);
	$num = mysqli_num_rows($query);

?>


<!DOCTYPE html>
<html>
<head>

	<title>Resep Detail</title>
	
	<link rel="stylesheet" type="text/css" href="resepdetil.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	
</head>
<body>

<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 7.5pt">
	<a href="../resep/resep.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Resep Detail</span>
</nav>

<div class="container">
	
<?php
	$h = mysqli_fetch_array($query);
	$koderesep = $h["koderesep"];
	//var_dump($koderesep);
	$query_edit = mysqli_query($con,"SELECT * FROM resep WHERE koderesep='$koderesep'");
	
	while ($a = mysqli_fetch_array($query_edit)) {
	
?>
	
	<!-- JUDUL, GAMBAR, DIBUAT OLEH -->
		<div class="row" style="padding-left: 15px;padding-right: 15px;padding-bottom: 10px">
			<div style="padding-top: 3pt;font-size: 120%;color: #ED503B;line-height: 15pt;text-transform:uppercase;">
				<b><?php echo $a[2];?></b>
			</div>
		</div>
		<div class="row" style="padding-left: 15px;padding-right: 15px">
			<div style="width: 100%;height: 100%;padding: 1pt;border: none">
				<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[1]); ?>" style="width: 328px;height: 164px;">
			</div>	
		</div>
		<div class="row">
			<div class="col" style="text-align:right">
				<span style="font-size: 70%;color: #AEAEAE;text-align:right;">By: <?php echo $a[6];?></span>
			</div>
		</div>
		
	<!-- AKHIR DARI JUDUL, GAMBAR, DIBUAT OLEH -->

		<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 2pt">
			<span style="font-size: 100%;margin-left: 5pt"><b>BAHAN</b></span>
		</div>


<?php
	$kuantitas = $a['8'];
	$jenisberat = $a['9'];
	$bahan = $a['10'];
	//var_dump($bahan);
	$kuantitass = explode(", ", $kuantitas);
	$jenisberats = explode(", ", $jenisberat);
	$bahans = explode(", ", $bahan);
	//print_r($bahans);
	
	for ($i = 0; $i < count($bahans); $i++) {

	$sql1 = "select * from tbbarang where namaitem='$bahans[$i]'";
	$query1 = mysqli_query($con,$sql1);

	while ($y = mysqli_fetch_array($query1)) {
?>
		
				<div class="row" style="margin-bottom:10px">
					<div class="col-2">
						<div style="width:50px;height:100%">
							<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($y[1]); ?>" style="width: 100%;height: 100%;float:left;margin-right:50px;">
						</div>
					</div>

					<div class="col">
						<span style="float:left"><?php echo $kuantitass[$i]; ?> &nbsp; </span>
						<span style="float:left"><?php echo $jenisberats[$i]; ?> &nbsp; </span>
						<a style="color:#212529;text-decoration: none" href="../itemdetil/itemdetil.php?kodeitem=<?= $y[0]; ?>"><span><?php echo $bahans[$i]; ?></span></a>
					</div>
				</div>

		<?php } ?>
			
	<?php } ?>
		
		<!-- ALAT -->
		
		<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 2pt">
			<span style="font-size: 100%;margin-left: 5pt"><b>ALAT</b></span>
		</div>
		<?php
			$alat = $a['11'];
			//var_dump($alat);
			$alats = explode(", ", $alat);
			//print_r($alats);
				for ($q = 0; $q < count($alats); $q++) {

					$sql2 = "select * from tbbarang where namaitem='$alats[$q]'";
					$query2 = mysqli_query($con,$sql2);

					while ($v = mysqli_fetch_array($query2)) {
		?>
		
		<div class="row" style="margin-bottom:10px">
			<div class="col">
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" id="<?php echo 'alat' . $q;?>">
					<label class="custom-control-label" for="<?php echo 'alat' . $q; ?>">
						<div style="width:50px;height:100%;float:left;margin-right:10px;">
							<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($v[1]); ?>" style="width: 100%;height: 100%;">
						</div>
							<span style="float:left"><?php echo $alats[$q]; ?></span>
					</label>
				</div>
			</div>


			<div class="col-5">
				<input type="text" name="jumlah" id="jumlah" value="1" style="width:30px">
				x
				<input type="text" name="harga" id="harga" value="Rp <?php echo number_format($v[7]); ?>" disabled readonly style="width:70px;font-size:14px;border:none;background-color: white">

			</div>
		</div>

		
		<?php } ?>

	<?php } ?>


		<!-- LANGKAH PEMBUATAN -->

		<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 2pt">
			<span style="font-size: 100%;margin-left: 5pt"><b>LANGKAH PEMBUATAN</b></span>
		</div>
		
		<?php
		$langkah = $a['12'];
			//var_dump($langkah);
				$langkahs = explode(" // ", $langkah);
			//print_r($langkahs);
				for ($p = 0; $p < count($langkahs); $p++) {	

		?>
		
		<div class="row">
			<div class="col-1" style="float:left">
				<span><?php echo $p < count($langkahs); ?></span>
			</div>

			<div class="col-9" style="float:left">
				<span>
					<?php echo $langkahs[$p]; ?>
				</span>
			</div>
		</div>
				<?php } ?>
		
		<!-- AKHIR DARI LANGKAH PEMBUATAN -->

<?php } ?>

</div>
	
	
</body>
</html>
