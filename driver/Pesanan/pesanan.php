<?php
include "koneksi.php";

$sql = "select * from tbakun where kodeuser='1'";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

for($x = 0; $x < $num; $x++){
	$h = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html>
<head>

	<title>Pemesan</title>

	<link rel="stylesheet" type="text/css" href="pesanan.css">
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

<script>
  function call() {
      window.open("tel:<?php echo $h[4]; ?>");
  }
</script>

<body style="background-color: #F3F3F3;">

	<nav class="navbar navbar-expand-md" style="background-color: #ED503B;padding:12px 16px;margin-bottom:15px;">
		<p style="color:white;font-weight:bold;font-size:20px;margin-bottom:2px;float:left">Terima Pesanan</p>
		<input type="checkbox" id="switch" /><label for="switch" style="float: right;margin-bottom:0px">Toggle</label>
	</nav>

<?php



?>

<div class="container-fluid">
	<div class="col-sm bg-white shadow-sm pt-3 pb-3">
		<div class="row">
			<div class="col-sm">
				<span class="font-weight-bold">Santi</span> <span class="font-weight-bold float-right">Pagi</span><BR>
				<span>Jalan Sungai Raya Dalam Gg. KFC</span><BR>
				<span>Pontianak Tenggara</span>
			</div>
		</div>
		<div class="row">
			<div class="col-sm mt-2">
				<button class="tombol tombol1" onclick="call()">Hubungi</button>
				<button class="tombol tombol2">Saya di jalan</button>
				<button class="tombol tombol3">Detail</button>
			</div>
		</div>
	</div>
</div>

<?php
}
?>

<div class="tabmenu">
	<div class="row">
		<div class="col-2"></div>

		<div class="col-3">
			<a href="../pesanan/pesanan.php">
				<i class='fa fa-envelope fontputih' style="font-size:18px;" aria-hidden="true"></i>
				<BR>
				<span class="fontputih">Pesanan</span>
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
				<i class='iconbawah fa fa-user' style="font-size:18px" aria-hidden="true"></i>
				<BR>
				<span class="iconbawah">Akun</span>
			</a>
		</div>

		<div class="col-2"></div>
	</div>
</div>

</body>
</html>