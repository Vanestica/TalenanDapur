<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="checkoutselesai.css">
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
		<a href="../itemdetil/itemdetil.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
	</nav>

	<div class="container">
		<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 10pt">
			<div style="border: 1px solid #AEAEAE;border-radius: 3pt;padding: 4pt;height: 100%;width: 100%;padding-left: 10pt;color: #79EE47">
				<i class="fas fa-ticket-alt gly-rotate-45"></i>
				<span style="padding-left: 5pt;font-size: 90%"><b>Gunakan Kode Promo atau Kupon</b></span>
			</div>	
		</div>

		<div class="row" style="padding-left: 15px;">
			<div class="alamat">
				<p class="alamat1"><b>Alamat Pengiriman</b></p>
				<p>Eric Suwendy (Rumah).</p>
				<p>Jl.Prof.M.Yamin Blok C12 Pasar Kemuning</p>
				<p>Pontianak, Kota Pontianak, Kalbar.</p>
				<p>08210987654321</p>
				<button class="kirim" style="color: #fff;">Ganti Informasi Pengiriman</button>
			</div>
		</div>

		<div class="row" style="padding-left: 15px;margin-top: 20px;line-height: 5px;">
			<div class="col" style="font-size: 15px;border:1px solid #AEAEAE;border-radius:3px;padding-top: 10px;margin-right: 15px;padding-bottom: 10px;">
				<div style="width: 40%;height: 100%;margin-bottom: 10px;float: left;padding-right: 15px;">
					<img src="../image/buah-naga.jpg" width="100%" height="100%">
				</div>
				<div style="float: right;width: 60%;padding-top: 5px;">
					<p style="color:rgb(57,200,56);font-weight: bold;">Buah Naga</p>
					<p style="text-decoration: line-through;">Rp. 16000</p>
					<p style="float: left;color:#ED503B;font-weight: bold;">Rp. 14.000 </p><label style="float: right;padding-right: 43px;font-size: 13px;">/ 500 gram</label>
					<div style="float: left;">
						<span style="font-size: 15px;padding-right: 5px;color:#ED503B;border-radius:50%;border: 2px solid #ED503B;padding-left: 5px;"><i class="fa fa-minus"></i></span>
						<input type="text" style="width: 10%;">
						<span style="padding-right: 5px;font-size: 15px;padding-left: 5px;border-radius: 50%;border:2px solid rgb(57,200,56);color:rgb(57,200,56);"><i class="fas fa-plus"></i></span>
						<span style="font-size: 20px;padding-left: 20px;"><i class="far fa-trash-alt"></i></span>
					</div>
				</div>
			</div>
		</div>


		<div class="row" style="padding-left: 15px;margin-top: 20px;">
			<div class="alamat">
				<p class="alamat1"><b>Pengiriman</b></p>
				<p>Senin, 18 Februari 2019</p>
				<p>Pagi, ETA 06.00 - 09.00 WIB</p>
				<button class="kirim" style="color: #fff;">Ganti Waktu Pengiriman</button>
			</div>
		</div>

		<div class="row" style="padding-left: 15px;padding-top: 20px;">
			<div class="alamat">
			<div class="alamat2">
				<p style="
	border-bottom:2px solid rgb(57,200,56);padding-bottom: 10px;"><b>Ringkasan Belanja</b></p>
				<p>Total harga (1 Barang)</p>
				<p>Ongkos Kirim</p>
			</div>
			<div class="alamat3">
				<p>Rp. 14.000</p>
				<p>Rp. 10.000</p>
			</div>
			</div>
		</div>

		<div class="row" style="padding-left: 8px;padding-top: 20px;line-height: 12px;margin-bottom: 10px;">
			<div style="border:1px solid #AEAEAE;width:97%;padding-top: 10px;padding-left: 10px;border-radius: 3px;">
				<p style="font-size: 15px;">Total Tagihan</p>
				<p style="color: #ED503B;font-weight: bold;">Rp.24.000</p>
				<button class="bayar">Bayar</button>
			</div>
		</div>
	</div>
</body>
</html>