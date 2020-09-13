<?php
// include('../daftar/daftardb.php');
// if (!isLoggedIn()) {
	// $_SESSION['msg'] = "You must log in first";
	// header('location: ../masuk/masuk.php');
// }
?>
<?php
	include 'koneksi.php';
	$sql1 ="select * from tbbarang";
	$query1 = mysqli_query($con,$sql1);
	$num1 = mysqli_num_rows($query1);
?>
<!DOCTYPE html>
<html>
<head>

	<title>Beranda</title>

	<link rel="stylesheet" type="text/css" href="beranda.css">
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
<script type="text/javascript">
	$(".custom-file-input").on("change", function() {
		  var fileName = $(this).val().split("\\").pop();
		  	$(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});

	function clic(button){
  let mainStar = button.getElementsByTagName("i")[0];
  mainStar.classList.toggle("far");
  mainStar.classList.toggle("fas");
  
  let style;
  let stars = '<div class="addedStars">';
  const maxX = 100;
  const maxY = 100;
  const minX = -100;
  const minY = -100;
  const nbChar = Math.random() * (10 - 5) + 5;
  let randX, randY;
  
  if(button.getElementsByTagName("i")[5].classList.contains("fas")){
    style = "fas";
  }else{
    style = "far";
  }
  
  for(let i = 0; i < nbChar; i++){
    stars += '<i class="' + style + ' fa-heart added"></i>';
  }
  
  stars += '</div>';
  
  button.parentElement.innerHTML = stars + button.parentElement.innerHTML;
    
  const addedStars = document.getElementsByClassName("added");
  
  setTimeout(function(){
    for(let j = 0; j < addedStars.length; j++){
      randX = Math.random() * (maxX - minX) + minX;
      randY = Math.random() * (maxY - minY) + minY;
      addedStars[j].style.opacity = "0";
      addedStars[j].style.transform = "translateX(" + randX + "px) translateY(" + randY + "px)";
    }
  }, 10);

  setTimeout(function(){
    document.getElementsByClassName("main")[0].removeChild(document.getElementsByClassName("addedStars")[0]);
  },500);
}
</script>
<body style="background-color:rgb(247,247,247);">
<nav class="navbar navbar-expand-sm warnaheader">
  <form class="form-inline" action="/action_page.php">
    <input class="form-control caribar" type="text" placeholder="Cari di sini">
  </form>

		<?php
		include 'koneksi.php';

		$sql = "SELECT * FROM `tbwishlist`";
 
		$connStatus = $con->query($sql);
 
		$numberOfRows = mysqli_num_rows($connStatus);
 
		?>
  <div class="notification">
	<a href="../wishlistitem/wishlistitem.php">
		<i class='fa fa-heart fontputih' style="font-size:18px" aria-hidden="true"></i>
		<span class="badge"><?php echo $numberOfRows ?></span>
	</a>
  </div>
  <div class="notification1">
	<a href="../notifikasi/notifikasi.php">
		<i class='fa fa-bell fontputih' style="font-size:18px" aria-hidden="true"></i>
		<span class="badge1">2</span>
	</a>
  </div>
</nav>

 <div id="demo" class="carousel slide menunya" data-ride="carousel">

  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../image/bann.png" alt="Los Angeles" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="../image/bann.png" alt="Chicago" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="../image/bann.png" alt="New York" width="1100" height="500">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>


<div class="wilayahsortir">
	<div class="kotaksortir" style="margin:0 10.5px">
		<a href="../berandaalat/berandaalat.php">
			<div class="kotakgambar">
				<img src="../image/panci1.png" class="icon1">
			</div>
			<p class="namasortir">Alat</p>
  		</a>
	</div>
	<div class="kotaksortir">
		<a href="../berandasayur/berandasayur.php">
			<div class="kotakgambar">
				<img src="../image/sayuran.png" class="icon1">
			</div>
			<p class="namasortir">Sayur</p>
  		</a>
	</div>
	<div class="kotaksortir" style="margin:0 10.5px">
		<a href="../berandabuah/berandabuah.php">
			<div class="kotakgambar">
				<img src="../image/lemon.png" class="icon1">
			</div>
			<p class="namasortir">Buah</p>
  		</a>
	</div>
	<div class="kotaksortir">
		<a href="../berandadaging/berandadaging.php">
			<div class="kotakgambar">
				<img src="../image/daging1.png" class="icon1">
			</div>
			<p class="namasortir">Daging</p>
  		</a>
	</div>
	<div class="kotaksortir" style="margin:0 10.5px">
		<a href="../berandabumbu/berandabumbu.php">
			<div class="kotakgambar">
				<img src="../image/bumbu.png" class="icon1">
			</div>
			<p class="namasortir">Bumbu</p>
  		</a>
	</div>
</div>



<div class="container">
	<div class="row">
		<div class="ko1">

			<div class="col" style="margin-bottom: 13pt;">
				<div class="warnaorange" style="float: left;">
					<span style="border-bottom: 2pt solid #79ee47"><b>New Arrival</b></span>
				</div>
				<div class="warnaorange" style="float:right;">
					<span style="text-align: right;"><b>More...</b></span>
				</div>
			</div>

			<div class="col">
			<div class="wilayahjualan">
					<form method="post" action="insert.php" enctype="multipart/form-data">
					<?php
						for($y = 0; $y < $num1; $y++){
						$a = mysqli_fetch_array($query1);
					?>
						<a href="../itemdetil/itemdetil.php?kodeitem=<?= $a[0]; ?>">
							
							<div class="card kotak1">

								<div style="border:none ;height: 90px;width: 104px;padding: 2pt">
									<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[1]); ?>" height="100%" width="100%" id="gambar1" name="gambar1">
								</div>

								<div class="main">
		  							<button style="border: none;background-color: transparent;color: red;margin-left: px;" href="javascript:void(0)" onclick="clic(this)" style="color:red;" id="save" name="save" value="save">
		   	 						<i class="far fa-heart"></i></button>
								</div>
								<div style="line-height: 12pt">
									<input type="text" name="kodeitem" hidden id="kodeitem" value="<?php echo $a[0];?>">
									<input type="text" name="namaitem" value="<?php echo $a[6];?>" style="border: none;width: 100%;" readonly class="judulitem">
									<input type="text" name="kuantitas" value="<?php echo $a[9];?>" style="border: none;width: 10%;float: left" readonly class="kuantitasitem">
									<input type="text" name="satuan" value="<?php echo $a[10];?>" style="border: none;width: 30%;float: left;" readonly class="kuantitasitem">
									<input type="text" name="harga" value="Rp <?php echo number_format($a[7]);?>" style="border: none;width: 100%;" readonly class="hargaitem">
								</div>
							</div>
						</a>
						<?php }?>
					</form>
				</div>
			</div>
		</div>
	</div>


	<div class="row">
		<div class="ko1">
			<div class="col">
				<div class="warnaorange">
					<span  style="float:left;border-bottom: 2pt solid #79ee47;margin-bottom:10px;"><b>Resep Baru Hari Ini</b></span>
				</div>
			</div>
			<div style="width: 100%;height: 100%;margin: 10pt 0;">
				<img src="../image/ban.png" height="100%" width="100%">
			</div>	
		</div>
	</div>

	<div class="row">
		<div class="ko1">

			<div class="col" style="margin-bottom: 13pt;">
				<div class="warnaorange" style="float: left;">
					<span style="border-bottom: 2pt solid #79ee47"><b>Special Promo</b></span>
				</div>
				<div class="warnaorange" style="float:right;">
					<span style="text-align: right;"><b>More...</b></span>
				</div>
			</div>


			<div class="col">
			<div class="wilayahjualan" style="clear: both;">
					<form method="post" action="insert.php" enctype="multipart/form-data">

						<a href="../itemdetil/itemdetil.php?kodeitem=<?= $h[0]; ?>">
							
							<div class="card kotak1">

								<div style="border:none ;height: 104px;width: 104px;padding: 2pt">
									<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[5]); ?>" height="100%" width="100%" id="image" name="image">
								</div>

								<div class="main">
		  							<button style="border: none;background-color: transparent;color: red;margin-left: px;" href="javascript:void(0)" onclick="clic(this)" style="color:red;" id="save" name="save" value="save">
		   	 						<i class="far fa-heart"></i></button>
								</div>
								<div style="line-height: 12pt">
									<input type="text" name="kodeitem" hidden id="kodeitem" value="<?php echo $h[0];?>">
									<input type="text" name="nama" value="<?php echo $h[1];?>" style="border: none;width: 100%;" readonly class="judulitem">
									<input type="text" name="satuan" value="<?php echo $h[2];?>" style="border: none;width: 100%;" readonly class="kuantitasitem">
									<input type="text" name="harga" value="<?php echo $h[3];?>" style="border: none;width: 100%;" readonly class="hargaitem">
								</div>
							</div>
						</a>

						<a href="../itemdetil/itemdetil.php?kodeitem=<?= $h[0]; ?>">
							
							<div class="card kotak1">

								<div style="border:none ;height: 104px;width: 104px;padding: 2pt">
									<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[5]); ?>" height="100%" width="100%">
								</div>

								<div class="main">
		  							<button style="border: none;background-color: transparent;color: red;margin-left: px;" href="javascript:void(0)" onclick="clic(this)" style="color:red;" id="save" name="save" value="save">
		   	 						<i class="far fa-heart"></i></button>
								</div>
								<div style="line-height: 12pt">
									<input type="text" name="kodeitem" hidden id="kodeitem" value="<?php echo $h[0];?>">
									<input type="text" name="nama" value="<?php echo $h[1];?>" style="border: none;width: 100%;" readonly class="judulitem">
									<input type="text" name="satuan" value="<?php echo $h[2];?>" style="border: none;width: 100%;" readonly class="kuantitasitem">
									<input type="text" name="harga" value="<?php echo $h[3];?>" style="border: none;width: 100%;" readonly class="hargaitem">
								</div>
							</div>
						</a>

					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="ko1" style="padding-bottom:20px;">
			<div class="col">
				<div class="warnaorange" style="width:100%;">
					<span  style="border-bottom: 2pt solid #79ee47"><b>Top-Up</b></span>
				</div>
			</div>

			<div class="col" style="margin-top:10px;">
				<div style="float: left;">
					<span><b>Saldo Anda :</b></span>
					<span style="color: #79ee47"><b>Rp.72.000</b></span>
				</div>
				<div style="float:right;color: #39ee47;">
					<i class="fas fa-plus"></i>
				</div>	
			</div>

			<div class="col">
				<input type="text" class="form-control" placeholder="Masukkan kode voucher" style="border-radius: 3pt;width: 65%;border: 1pt solid #AEAEAE;float:left;margin-top:10px;">
				<button class="btn btn-danger" style="padding: 6px 15.8px;margin-left:10px;margin-top:10px;">Konfirmasi</button>
			</div>	
		</div>
	</div>

	<div class="row">
		<div class="ko1">

			<div class="col" style="margin-bottom: 13pt;">
				<div class="warnaorange" style="float: left;">
					<span style="border-bottom: 2pt solid #79ee47"><b>Alat</b></span>
				</div>
				<div class="warnaorange" style="float:right;">
					<span style="text-align: right;"><b>More...</b></span>
				</div>
			</div>


			<div class="col">
			<div class="wilayahjualan" style="clear: both;">
					<form method="post" action="insert.php" enctype="multipart/form-data">

						<a href="../itemdetil/itemdetil.php?kodeitem=<?= $h[0]; ?>">
							
							<div class="card kotak1">

								<div style="border:none ;height: 104px;width: 104px;padding: 2pt">
									<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[5]); ?>" height="100%" width="100%">
								</div>

								<div class="main">
		  							<button style="border: none;background-color: transparent;color: red;margin-left: px;" href="javascript:void(0)" onclick="clic(this)" style="color:red;" id="save" name="save" value="save">
		   	 						<i class="far fa-heart"></i></button>
								</div>
								<div style="line-height: 12pt">
									<input type="text" name="kodeitem" hidden id="kodeitem" value="<?php echo $h[0];?>">
									<input type="text" name="nama" value="<?php echo $h[1];?>" style="border: none;width: 100%;" readonly class="judulitem">
									<input type="text" name="satuan" value="<?php echo $h[2];?>" style="border: none;width: 100%;" readonly class="kuantitasitem">
									<input type="text" name="harga" value="<?php echo $h[3];?>" style="border: none;width: 100%;" readonly class="hargaitem">
								</div>
							</div>
						</a>

						<a href="../itemdetil/itemdetil.php?kodeitem=<?= $h[0]; ?>">
							
							<div class="card kotak1">

								<div style="border:none ;height: 104px;width: 104px;padding: 2pt">
									<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[5]); ?>" height="100%" width="100%">
								</div>

								<div class="main">
		  							<button style="border: none;background-color: transparent;color: red;margin-left: px;" href="javascript:void(0)" onclick="clic(this)" style="color:red;" id="save" name="save" value="save">
		   	 						<i class="far fa-heart"></i></button>
								</div>
								<div style="line-height: 12pt">
									<input type="text" name="kodeitem" hidden id="kodeitem" value="<?php echo $h[0];?>">
									<input type="text" name="nama" value="<?php echo $h[1];?>" style="border: none;width: 100%;" readonly class="judulitem">
									<input type="text" name="satuan" value="<?php echo $h[2];?>" style="border: none;width: 100%;" readonly class="kuantitasitem">
									<input type="text" name="harga" value="<?php echo $h[3];?>" style="border: none;width: 100%;" readonly class="hargaitem">
								</div>
							</div>
						</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

		<?php
		include 'koneksi.php';

		$sql = "SELECT * FROM `tbl_product`";
 
		$connStatus = $con->query($sql);
 
		$numberOfRows = mysqli_num_rows($connStatus);
 
		?>
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
	<span class="badge"><?php echo $numberOfRows ?></span>
  </a>
  <a href="../akun/akun.php">
	<i class='fa fa-user fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span>Akun</span>
  </a>
</div>

<script src='https://code.jquery.com/jquery-1.12.4.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script>
<script  src="../../source/slide/index.js"></script>

</body>
</html>