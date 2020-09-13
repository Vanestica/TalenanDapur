<!DOCTYPE html>

<html>
<head>

	<title>Data Anda</title>

	<link rel="stylesheet" type="text/css" href="checkout.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-3.3.1.min.js"></script>
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

<?php

include "koneksi.php";

$next_date = date("Y-m-d", strtotime('tomorrow')); 

$sql10 = "select * from tbtransaksi";
$query10 = mysqli_query($con, $sql10);
$num10 = mysqli_num_rows($query10)+1;
$no = "TR-".$num10;


?>

<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 7.5pt">
	<a href="../keranjang/keranjang.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Data Anda</span>
</nav>

<?php


	include "koneksi.php";
	$sql = "select * from tbakun where kodeuser='1'";
	$query = mysqli_query($con,$sql);
	$num = mysqli_num_rows($query);

	for($x = 0; $x < $num; $x++){
		$a = mysqli_fetch_array($query);
		$kodeuser = $a['kodeuser'];
		$nama = $a['nama'];
		$email = $a['email'];
		$notelp = $a['notelp'];
		$alamat = $a['alamat'];

?>


	
		<?php
			include "koneksi.php";

			$sql0 = "select * from tbkeranjang";
			$query0 = mysqli_query($con, $sql0);
			$num0 = mysqli_num_rows($query0);
			

			for ($x=0;$x<$num0;$x++) {
				$re=mysqli_fetch_array($query0);
				$notemp = $re['notemp'];


				$sql = "select tbb.kodeitem, tbb.namaitem, tbb.gambar1, tbk.total, tbk.totalkuantitas, tbb.satuan from tbbarang tbb inner join tbkeranjang tbk on tbb.kodeitem=tbk.kodeitem where tbk.notemp='$notemp'";
				$query = mysqli_query($con,$sql);


				while ($row=mysqli_fetch_array($query)) {
					$kodeitem = $row['kodeitem'];
					$namaitem = $row['namaitem'];
					$gambar = $row['gambar1'];
					$harga = $row['total'];
					$kuantitas = $row['totalkuantitas'];
					$satuan = $row['satuan'];
		?>

		<form action="simpan.php" method='POST'>

				<div style="width: 30%;float: left;height: 100%;border: none;">
					<!--<img style="width: 100%;height: 100%" src="data:image/jpeg; base64, <php// echo base64_encode($row["image"]); ?>"> -->
					<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($gambar); ?>" height="100%" width="100%" id="gambar2" name="gambar2" hidden>
				</div>
				<div style="width: 67%;height: 100%;float: right;border: none;">
					<div class="row" style="padding-left: 10pt;padding-right: 12pt">

						<input type="text" id="no" name="no" value="<?php echo $no; ?>" hidden>
						<input type="text" id="notemp" name="notemp" value="<?php echo $notemp; ?>" hidden>
						<input type="text" id="kodeitem" name="kodeitem" value="<?php echo $kodeitem;?>" hidden>
						<input type="text" id="namaitem" name="namaitem" value="<?php echo $namaitem;?>" style="border: none;float: left;width: 85%;font-weight: bold" readonly hidden>

						<button style="border: none;background-color: white;float: left;" onclick="del(<?php echo $notemp;?>)" hidden>
							<i class="far fa-trash-alt"></i>
						</button>
					</div>
					<div class="row" style="padding-left: 10pt;padding-right: 12pt">
						<span style="font-size: 80%;color: #ED503B;float: left;padding-top: 2pt" hidden>Rp. </span>
						<input type="text" id="harga" name="harga" value="<?php echo $harga; ?>" hidden style="border: none;background-color: white;font-size: 80%;float: left;width: 22%;color: #ED503B" readonly>
						<input type="text" id="kuantitas" name="kuantitas" value="<?php echo $kuantitas; ?>" style="border: none;float: left;width: 14%;color: #AEAEAE;font-size: 80%;padding-left: 3pt" hidden readonly>
						<input type="text" name="satuan" id="satuan" value="<?php echo $satuan;?>" style="border: none;float: left;font-size: 80%;width: 20%;color: #AEAEAE" hidden readonly>
					</div>
				</div>

			<?php
					}

				}
				
			?>

			<?php
				include "koneksi.php";

				$result = mysqli_query($con,'SELECT SUM(total) AS keseluruhan FROM tbkeranjang'); 
				$row = mysqli_fetch_assoc($result); 
				$sum = $row['keseluruhan'];

			?>


				<input type="text" name="grandtotal" id="grandtotal" value="<?php echo $sum; ?>" hidden>
	


<div class="container" style="margin-top:16px">


		<div class="row" style="margin-bottom:16px">
			<div class="col">
				<label>Tanggal pengiriman</label>
				<input type="text" class="form-control" name="tgl" id="tgl" value="<?php echo $next_date; ?>" disabled>
			</div>
		</div>

		<input type="text" name="kodeuser" id="kodeuser" value="<?php echo $kodeuser; ?>" hidden>

		<div class="row" style="margin-bottom:16px">
			<div class="col">
				<label>Nama</label>
				<input type="text" class="form-control" nama="nama" id="nama" value="<?php echo $nama; ?>" disabled>
			</div>
		</div>

		<div class="row" style="margin-bottom:16px">
			<div class="col">
				<label>Email</label>
				<input type="email" class="form-control" nama="email" id="email" value="<?php echo $email; ?>" disabled>
			</div>
		</div>

		<div class="row" style="margin-bottom:16px">
			<div class="col">
				<label>Nomor Handphone</label>
				<input type="telp" class="form-control" nama="nama" id="nama" value="<?php echo $notelp; ?>" disabled>
			</div>
		</div>

		<div class="row" style="margin-bottom:16px">
			<div class="col">
				<label>Pilih Wilayah</label>
				<select class="form-control" name="wilayah">
					<?php
						$sql2 = "select * from tbwilayah";
						$query2 = mysqli_query($con,$sql2);
						$num2 = mysqli_num_rows($query2);

						for($y = 0; $y < $num2; $y++){
							$b = mysqli_fetch_array($query2);
							$kodewilayah = $b['kodewilayah'];
							$namawilayah = $b['namawilayah'];
					?>
						<option value="<?php echo $namawilayah; ?>"><?php echo $namawilayah; ?></option>
					<?php } ?>
				</select>
			</div>
		</div>

		<div class="row" style="margin-bottom:16px">
			<div class="col">
				<label>Alamat Lengkap</label>
				<textarea type="telp" class="form-control" nama="nama" id="nama" disabled><?php echo $alamat; ?></textarea>
			</div>
		</div>

		<div class="row" style="margin-bottom:16px">
			<div class="col">
				<label>Silahkan pilih waktu pengiriman pesanan</label>
				<div class="estimasi">
					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="waktu1" name="waktu" value="Pagi">
					    <label class="custom-control-label" for="waktu1">Pagi (06:00 WIB - 09:00 WIB)</label>
					</div>

					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="waktu2" name="waktu" value="Siang">
					    <label class="custom-control-label" for="waktu2">Siang (11:00 WIB - 14:00 WIB)</label>
					</div>

					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="waktu3" name="waktu" value="Sore">
					    <label class="custom-control-label" for="waktu3">Sore (16:00 WIB - 18:00 WIB)</label>
					</div>

					<div class="custom-control custom-radio">
					    <input type="radio" class="custom-control-input" id="waktu4" name="waktu" value="Malam">
					    <label class="custom-control-label" for="waktu4">Malam (19:00 WIB - 21:00 WIB)</label>
					</div>
				</div>
			</div>
		</div>

		<input type="submit" class="btn btn-block" value="Sudah benar. Saya akan order" style="background-color: #ED503B;color:white;font-weight: bold">

<?php } ?>
</div>
	</form>


</div>

</body>
</html>
