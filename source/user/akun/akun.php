<!DOCTYPE html>
<html>
<head>

	<title></title>

	<link rel="stylesheet" type="text/css" href="akun.css">
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

<body style="background-color:white">

<div class="container" style="margin-top:20px">
	<div class="">
		<div class="row" style="margin-bottom:30px">
			<div class="col">
				<img src="../image/PWD.jpg" class="fotoprofil">
				<a href="" class="iconkamera"><span class="fa fa-camera"></span></a>
			</div>
		</div>

		<div class="row">
			<div class="col">
				<div class="input-group">
				<i class="fa fa-pen"></i>
				<input type="text" class="form-control" placeholder="Enter Name Here" >
				</div>
			</div>
		</div>
	</div>
</div>


<div class="bc">
	<div class="bc1">
		<div>
			<img src="../image/PWD.jpg" class="bc3">
			<a href="" class="bc4"><span class="fa fa-camera"></span></a>
		</div>
		<div class="b1">
			<p style="font-weight: bold;font-size: 15px;width: 50%;">Nama</p>
			<label class="b2">Eric Suwendy <a href="" class="b3">
			<span class="fa fa-pen"></span></a></label>
		</div>
		<div class="b1">
			<p style="font-weight: bold;font-size: 15px;width: 50%;">Email</p>
			<p style="position: relative;float: right;right: 40px;top: -35px;font-size: 12px;color:#ED503B;font-weight: bold;">Not Verified</p>
			<label class="b2" style="top: -45px;">suwendyerik@yahoo.com <a href="" class="b3"><span class="fa fa-pen"></span></a></label>
		</div>
		<div class="b1" style="top: -50px;position: relative;">
			<p style="font-weight: bold;font-size: 15px;width: 50%;">Alamat</p>
			<label class="b2" style="height: 120px;">Jl.Prof.M.Yamin Blok C12, Pasar Kemung.<a href="" class="b3">
			<span class="fa fa-pen"></span></a></label>
		</div>
		<div class="b1" style="top: -50px;position: relative;">
			<p style="font-weight: bold;font-size: 15px;width: 50%;">Telepon</p>
			<label class="b2">08213748669211<a href="" class="b3">
			<span class="fa fa-pen"></span></a></label>
		</div>
		<div>
			<a href="" class="bl">
				<span class="fa fa-sign-out-alt">Keluar
				</span>
			</a>
		</div>
		<div>
			<a href="" class="bl1" style="	text-decoration: none;"><p>Ganti Password</p></a>
		</div>
	</div>
</div>




<div class="tabmenu">
  <a href="../beranda/beranda.php">
	<i class='iconbawah fa fa-home fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Beranda</span>
  </a>
  <a href="../resep/resep.php">
	<i class='iconbawah fa fa-utensils fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Resep</span>
  </a>
  <a href="../bantuan/bantuan.php">
	<i class='iconbawah fa fa-question-circle fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Bantuan</span>
  </a>
  <a href="../keranjang/keranjang.php">
	<i class='iconbawah fa fa-shopping-cart fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Keranjang</span>
	<!-- <span class="badge"><?php echo $numberOfRows ?></span> -->
  </a>
  <a href="../akun/akun.php">
	<i class='fa fa-user fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span>Akun</span>
  </a>
</div>

</body>
</html>