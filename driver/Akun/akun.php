<?php
include "koneksi.php";


$sql = "select * from tbakun";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

?>
<!DOCTYPE html>
<html>
<head>

	<title>Akun</title>

	<link rel="stylesheet" type="text/css" href="akun.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
 
 <link rel="stylesheet" type="text/css" href="../../source/bootstrap.min.css">
 
 <script src="../../source/jquery-3.3.1.min.js"></script>
 <script src="../../source/proper.min.js"></script>
 <script src="../../source/jquery.min.js"></script>
 <script src="../../source/bootstrap.min.js"></script>
	
</head>
<body>
	
<div class="container" style="background-color: #e8e8e8;border:1px solid #bbb;">
		<div class="dz">
			<div class="h-75 img1"></div>
		</div>
		<div class="row">	
			 <img src="../image/jerry.jpg" class="rounded-circle img w-25"> 
		</div>
	<div class="row">
		<div class="ld">
			<span class="fa fa-star checked" style="font-size: 20px;margin-left: 45px;"></span>
			<span class="fa fa-star checked" style="font-size: 20px;"></span>
			<span class="fa fa-star checked" style="font-size: 20px;"></span>
			<span class="fa fa-star" style="font-size: 20px;"></span>
			<span class="fa fa-star" style="font-size: 20px;"></span><br>
			<span class="md1">Rating 3.3</span>
			<span class="md"><button class="ds">UBAH</button></span>
		</div>
	</div>

	<div class="row d1">
		<?php 
		for ($i=1; $i <=$num; $i++) { 
			$a = mysqli_fetch_array($query);
		?>
			<div class="col-12">
				<p class="d2">Nama :</p>
				<p class="b1"><?php echo $a[1];?></p>
			</div>
			<div class="col-12">
				<p class="d2">Email :</p>
				<p class="b1"><?php echo $a[2];?></p>
			</div>
			<div class="col-12">
				<p class="d2">Alamat :</p>
				<p class="b1"><?php echo $a[5];?></p>
			</div>
			<div class="col-12">
				<p class="d2">No.Hp :</p>
				<p class="b1"><?php echo $a[4];?></p>
			</div>
			<div class="col-12">
				<p class="d2">Kode Driver :</p>
				<p class="b1">4527</p>
			</div>
		<?php } ?>
	</div>
</div>

	<div class="out">
		<a href="" class="icl"><span class="fa fa-sign-out-alt"></span>Logout</a>
	</div>

<div class="tabmenu">
	<div class="row">
		<div class="col-2"></div>

		<div class="col-3">
			<a href="../pesanan/pesanan.php">
				<i class='iconbawah fa fa-envelope fontputih' style="font-size:18px;" aria-hidden="true"></i>
				<BR>
				<span class="iconbawah fontputih">Pesanan</span>
			</a>
		</div>

		<div class="col-3">
			<a href="../history/history.php">
				<i class='iconbawah fa fa-history' style="font-size:18px;" aria-hidden="true"></i>
				<BR>
				<span class="iconbawah">History</span>
			</a>
		</div>

		<div class="col-3">
			<a href="../akun/akun.php">
				<i class='fa fa-user' style="font-size:18px" aria-hidden="true"></i>
				<BR>
				<span class="">Akun</span>
			</a>
		</div>

		<div class="col-2"></div>
	</div>
</div>

</body>
</html>