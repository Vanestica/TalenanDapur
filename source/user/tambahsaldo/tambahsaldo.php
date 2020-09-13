<?php
	// include '../../koneksi.php';
	// $sql ="select * from wishlist";
	// $query = mysqli_query($con,$sql);
	// $num = mysqli_num_rows($query);

	// $sql1 ="select * from additem";
	// $query1 = mysqli_query($con,$sql1);
	// $num1 = mysqli_num_rows($query1);
?>
<!DOCTYPE html>
<html>
<head>

	<title>Tambah Saldo</title>

	<link rel="stylesheet" type="text/css" href="tambahsaldo.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css'>
	
	<link rel="stylesheet" type="text/css" href="../../source/bootstrap.min.css">
	<link rel="stylesheet" href="../../source/slide/style.css">
	
	<script src="../../source/jquery-3.3.1.min.js"></script>
	<script src="../../source/proper.min.js"></script>
	<script src="../../source/jquery.min.js"></script>
	<script src="../../source/bootstrap.min.js"></script>
	

</head>

<body style="background-color: rgb(244,244,244);">

<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 3pt">
	<a href="../resep/resep.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Tambah Saldo</span>
</nav>


<div class="container" style="padding-top:10px;">

	<div class="row">
		<div class="col">
			<div class="form-group">
			<h4><b> Top Up </b></h4>
			  <label for="topup"><i> Nominal Pembayaran </i></label>
			  <select class="form-control" id="topup">
			    <option>Rp 20.000</option>
			    <option>Rp 50.000</option>
			    <option>Rp 100.000</option>
			    <option>Rp 150.000</option>
			  </select>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col">
			<div class="form-group">
				<h4><b> Voucher </b></h4>
			  <label for="voucher">Sebagai bukti pembelian saldo</label>
			  <input type="text" class="form-control" id="voucher">
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col">
			<div style="margin-top:20px">
				<h5 style="margin-bottom:15px">Metode Pembayaran</h5>
				<div class="kotak1">
					<div class="sub1">
						<div class="kotaklogo" style="float:left">
							<img class="logobank" src="../image/bca.jpg" \>
						</div>
						<div class="kotakkanan">
							<label class="sub3"><b>Total Harga : </b><span>Rp 52.000</span></label>
							
						</div>
						<div class="sub2">
							<label>Harga sudah termasuk pajak 10% dan biaya layanan 20%</label>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- <div class="col">
			 <button type="button" class="btn btn-danger btn-block">Beli</button> 
		</div> -->
	</div>

	<div class="row" style="margin-top:30px;">
		<div class="col">
			<h7><b>Panduan Pembayaran</b></h7>
			<label>Setelah memilih metode pembayaran , pergilah ke 
kedai terdekat. Bayar dengan harga yang tertera
pada aplikasi Talenan Dapur. Setelah membayar
maka kasir akan memberikan struk pembelian 
dan didalamnya akan tertera kode saldo. Masukan
kode saldo tersebut dalam aplikasi, setelah
mengisikan kode maka saldo dalam akun anda
akan bertambah secara otomatis.</label>
		</div>
	</div>
	

</div>



</body>
</html>