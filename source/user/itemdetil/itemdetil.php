
<!DOCTYPE html>
<?php
	include 'koneksi.php';

?>
<html>
<head>

	<title>Item Detil</title>

	<link rel="stylesheet" type="text/css" href="itemdetil.css">
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
	<script  src="js/index.js"></script>
</head>
<script type="text/javascript">
	function kali(){
		var angka1 = document.getElementById('price').value;
		var angka2 = document.getElementById('quantity').value;
		var perkalian = parseInt(angka1)*parseInt(angka2);

		document.getElementById('total').value = parseInt(perkalian);
	}
	function keranjang() {
		alert("Item Telah di Tambah ke Keranjang")
	}
</script>
<body>
<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 7.5pt">
	<a href="../beranda/beranda.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Item Detail</span>
</nav>
<?php
	include 'koneksi.php';
	$sql1 ="select * from tbbarang";
	$query1 = mysqli_query($con,$sql1);
	$num1 = mysqli_num_rows($query1);
	$a = mysqli_fetch_array($query1);
?>

<div class="container">
	<form action="simpan.php" method="post">
	<div class="row" style="padding-left: 15px;padding-right: 15px">
		<div class="b1">
			<div class="box1">
				<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[1]); ?>" height="100%" width="100%" id="gambar1" name="gambar1" value="<?php echo base64_encode($a[1]); ?>">
				<input type="text" id="gambar1" name="gambar1" hidden>
			</div>
		</div>

		<input type="text" name="kodeitem" id="kodeitem"  value="<?php echo $a[0];?>" hidden>
		<div class="b2">
			<div class="box2">
				<center style="border-bottom: 1px solid #AEAEAE;font-size">Nutrisi</center>
				<div style="float:left;line-height: 3px;font-size: 80%;margin-top:10px">
					<p>Air</p>
					<p>Karbohidrat</p>
					<p>Protein</p>
					<p>Lemak</p>
					<p>Serat</p>
					<p>Calcium</p>
					<p>Fosfor</p>
					<p>Vitamin C</p>
				</div>
				<div style="float:right;line-height: 3px;font-size: 80%;margin-top: 10px">
					<p>90,20%</p>
					<p>11,50%</p>
					<p>0,53%</p>
					<p>0,40%</p>
					<p>0,71%</p>
					<p>100g</p>
					<p>8,70%</p>
					<p>9,40%</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 10pt">
		<div class="b1">
			<div class="box3">
				<div class="img1">
					<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[2]); ?>" height="100%" width="100%" id="gambar2" name="gambar2">
				</div>
				<div class="img1">
					<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[3]); ?>" height="100%" width="100%" id="gambar3" name="gambar3">
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 10pt">
		<div class="b3" style="font-size: 80;line-height: 3px;font-size: 80%;padding: 7pt;float: left">
				<input type='text' name='namaitem' id='namaitem'  readonly value='<?php echo $a[6];?>' style='background-color:#E8E8E8;border:none;padding-bottom: 3pt'>
			<div class="row" style="padding-left: 15px">
				<input type="text" name="harga" id="harga" value="<?php echo $a[7];?>" readonly style="width: 30%;float: left;background-color: #E8E8E8;border: none">
				<span style="margin-top: 5pt;margin-right: 2pt">/</span>
				<input type="text" name="kuantitas" id="kuantitas" value="<?php echo $a[9];?>" onkeyup="kali()" style="width: 10%;border: none;background-color: #E8E8E8;float: right;height: 15pt">
				<input type="text" name="satuan" id="satuan" value="<?php echo $a[10];?>" style="width: 30%;border: none;background-color: #E8E8E8;float: right;height: 15pt" readonly>
			</div> 
			<div style="padding-left: 15px;border-bottom: 1px solid #AEAEAE;margin-top : 0pt;padding-bottom: 2pt">
			</div>
			<div class="row" style="padding-left: 15px;margin-bottom: -7pt;padding-top: 7pt;margin-bottom: 0pt">
				<input type='button' value='-' class='qtyminus' field='quantity' style="height: 17pt" />
				<input type='text' name='quantity' id="quantity" value='1' class='qty' / style="width: 45%;margin-left: 5pt;margin-right: 5pt;text-align: center;" onkeyup="kali()">
				<input type='button' value='+' class='qtyplus' field='quantity' />

			</div>
			<div class="row" style="padding-left: 15px;margin-bottom: -7pt;padding-top: 7pt">
				<span style="float: left;padding-top: 5pt">Total : </span>
				<input style="width: 70%;float: right;margin-bottom: 5pt;height: 20px;background-color: #E8E8E8;border: none;padding-bottom: 3pt;padding-left: 33pt" type="text" name="total" id="total" readonly onkeyup="kali()" value="14000">
			</div>
		</div>
		<div style="width: 50%;height: 100%;border: none;float: right;padding-top: 15pt;padding-bottom: 15pt">
			<button class="butn" style="height: 25pt;width: 100pt;float: left;margin-bottom: 7pt"><b><center>Beli Sekarang</center></b></button>
			<input type="submit" name="save" id="save" value="save" class="butn2" onclick="keranjang()" style="height: 25pt;width: 100pt;float: left;">
		</div>
	</div>
	<div style="border: none;width: 100%;height: 100%;font-size: 80%">
		<b>Resep yang terkait</b>
	</div>
	<div class="row" style="border: none; margin: 0px;height: 100%">
		<div style="width: 50%;height: 100%;padding: 3pt 5pt 3pt 0pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/jus2.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span><br>
			<span style="font-size: 8pt;color: black"><b>Jus Buah Naga, Rasakan Enaknya di Siang Hari</b></span>
		</div>
	</div>
</div>
		<div style="width: 50%;height: 100%;padding: 3pt 0pt 3pt 5pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/tomyam.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span>
			<span style="font-size: 8pt;color: black"><b>Tomyam, Perpaduan Rasa Yang Nikmat</b></span>
		</div>
	</div>
</div>
</div>
	<div class="row" style="border: none; margin: 0px;height: 100%">
		<div style="width: 50%;height: 100%;padding: 3pt 5pt 3pt 0pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/jus2.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span><br>
			<span style="font-size: 8pt;color: black"><b>Jus Buah Naga, Rasakan Enaknya di Siang Hari</b></span>
		</div>
	</div>
</div>
		<div style="width: 50%;height: 100%;padding: 3pt 0pt 3pt 5pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/tomyam.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span>
			<span style="font-size: 8pt;color: black"><b>Tomyam, Perpaduan Rasa Yang Nikmat</b></span>
		</div>
	</div>
</div>
</div>
</form>
</div>
</body>
</html>
