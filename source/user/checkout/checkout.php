<!DOCTYPE html>

<html>
<head>

	<title>Item Detil</title>

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
	<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 7.5pt">
		<a href=""><i class="fas fa-angle-left" style="font-size: 100%;float: right;color:black;"></i></a>
		<span style="position: absolute;left: 40px;top:8px;padding-left: 125px;margin-top: -5px;"><img src="../image/logo1.png" width="27%;"></span>
	</nav>

	<div class="container">
	<div style="background-color: #ED503B;margin-left: -15px;margin-right: -15px;margin-top: -8px;">
		<div class="row" style="padding-left: 40px;color: #fff;font-size: 20px;padding-top: 5px;height: 45px;width: 100%;">
			<span style="padding-right: 10px;"><i class="fa fa-user"></i></span>
			<p>Data Anda</p>
		</div>
	</div>

	<div class="row" style="padding-left: 10px;">
		<div class="tanggal">
			<p>Tanggal Pengiriman</p>	
			<input type="text" disabled placeholder="Sunday,21 April 2019" class="tanggal1">
		</div>

		<div style="line-height: 5px;padding-top: 20px;padding-left: 15px;">
			<p>Nama</p>	
			<input type="text"placeholder="Nama Anda" class="nama">
		</div>

		<div style="line-height: 5px;padding-top: 20px;padding-left: 15px;">
			<p>Email</p>	
			<input type="text" disabled placeholder="TalenanDapur@gmail.com" class="nama">
		</div>

		<div style="line-height: 5px;padding-top: 20px;padding-left: 15px;">
			<p>Nomor Telepon</p>
			<label class="nomor">+62</label>	
			<input type="text"placeholder="8xxxxxxxx" class="nomor1">
		</div>

		<div style="line-height: 5px;padding-top: 20px;padding-left: 15px;">
			<p>Wilayah</p>
			<select style="color: grey;width: 320px;height: 30px;font-size: 14px;">
				<option>Pilih Wilayah</option>
				<option>Pontianak</option>
				<option>Kuburaya</option>
				<option>Serdam</option>
			</select>
		</div>

		<div style="line-height: 5px;padding-top: 20px;padding-left: 15px;">
			<p>Alamat Lengkap</p>	
			<textarea type="text" placeholder="Mohon diisi dengan lengkap" class="alamat"></textarea>
		</div>

		<div class="kirim">
			<div style="font-size: 15px;width: 320px;">
				<span class="icon1"><i class="fas fa-exclamation-circle" style="padding-left: 5px;"></i></span>
				<p style="float: left;background-color: rgb(255,220,138);padding-right: 5px;color: rgb(187,154,75);">Silakan pilih waktu pengiriman pesanan</p>
			</div>
			<div style="line-height: 12px;float: left;font-size: 13px;">
				<input type="checkbox" name=""><label style="padding-left: 5px;">Pagi</label>
				<p>ETA 06.00 - 09.00 WIB</p>
			</div>	
			<div style="line-height: 12px;float: right;padding-right: 25px;font-size: 13px;">
				<input type="checkbox" name=""><label style="padding-left: 5px;">Siang</label>
				<p>ETA 11.00 - 14.00 WIB</p>
			</div>
			<div style="line-height: 12px;float: left;font-size: 13px;">
				<input type="checkbox" name="" ><label style="padding-left: 5px;">Sore</label>
				<p>ETA 16.00 - 18.00 WIB</p>
			</div>	
			<div style="line-height: 12px;float: right;padding-right: 25px;font-size: 13px;">
				<input type="checkbox" name=""><label style="padding-left: 5px;">Malam</label>
				<p>ETA 19.00 - 21.00 WIB</p>
			</div>
		</div>

		<div style="line-height: 5px;padding-top: 20px;padding-left: 15px;">
			<p>Notes</p>	
			<textarea type="text" class="note"></textarea>
			<button class="simpan" style="border-radius: 3px;">Simpan</button>
		</div>
	</div>
</div>
</body>
</html>
