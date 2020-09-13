<!DOCTYPE html>
<html>
<head>

  <title>Beranda</title>

  <link rel="stylesheet" type="text/css" href="berandasayur.css">
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

<body style="background-color:rgb(247,247,247);">

<nav class="navbar navbar-expand-sm warnaheader">
  <form class="form-inline" action="/action_page.php">
    <input class="form-control caribar" type="text" placeholder="Cari di sini">
  </form>
  <div class="notification">
	<a href="../wishlistitem/wishlistitem.php">
		<i class='fa fa-heart fontputih' style="font-size:18px" aria-hidden="true"></i>
		<span class="badge">2</span>
	</a>
  </div>
  <div class="notification1">
	<a href="../notifikasi/notifikasi.php">
		<i class='fa fa-bell fontputih' style="font-size:18px" aria-hidden="true"></i>
		<span class="badge1">2</span>
	</a>
  </div>
</nav>

<div class="container">
	<div style="margin-right: -15px;margin-left: -15px;">
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
			<div class="kotakgambar aktif1">
				<img src="../image/sayuran.png" class="icon1">
			</div>
			<p class="namasortir aktif2">Sayur</p>
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
  
<div class="kotaksp">
	<div class="warnaorange">
		<span class="floatkiri">Special Promo</span>
		<a href="../moresp6/moresp6.php"><span class="floatkanan">More...</span></a>
	</div>
	
	<div class="wilayahjualan">
		<div class="card kotak1">
			<img class="card-img-top" src="../image/tomat.png" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Tomat</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="diskonitem">
					<span>Rp 5.500</span>
				</div>
				<div class="hargaitem">
					<span>Rp 3.500</span>
				</div>
			</div>
		</div>
		
		<div class="card kotak1">
			<img class="card-img-top" src="../image/kangkung.jpg" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Kangkung</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="diskonitem">
					<span>Rp 3.000</span>
				</div>
				<div class="hargaitem">
					<span>Rp 2.500</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="kotakspesifik">
	
	<div class="wilayahjualan">
		<div class="card kotak2">
			<img class="card-img-top" src="../image/kecambah.jpg" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Kecambah</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="hargaitem">
					<span>Rp 3.000</span>
				</div>
			</div>
		</div>
		
		<div class="card kotak2">
			<img class="card-img-top" src="../image/pare.jpg" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Pare</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="hargaitem">
					<span>Rp 8.000</span>
				</div>
			</div>
		</div>
		
		<div class="card kotak2">
			<img class="card-img-top" src="../image/timun.png" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Timun</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="hargaitem">
					<span>Rp 5.000</span>
				</div>
			</div>
		</div>
		
		<div class="card kotak2">
			<img class="card-img-top" src="../image/pakis.jpg" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Pakis</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="hargaitem">
					<span>Rp 10.000</span>
				</div>
			</div>
		</div>
		
		<div class="card kotak2">
			<img class="card-img-top" src="../image/bayam.jpg" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Bayam</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="hargaitem">
					<span>Rp 3.000</span>
				</div>
			</div>
		</div>
		
		<div class="card kotak2">
			<img class="card-img-top" src="../image/wortel.jpg" alt="Card image">
				<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>
			<div>
				<div class="judulitem">
					<span>Wortel</span>
				</div>
				<div class="kuantitasitem">
					<span>1 ons</span>
				</div>
				<div class="hargaitem">
					<span>Rp 6.000</span>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="d-flex justify-content-center">
  <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
</div>
</div>


<div class="tabmenu">
  <a href="../beranda/beranda.php">
  <i class='fa fa-home fontputih' style="font-size:18px;" aria-hidden="true"></i><BR>
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
  </a>
  <a href="../akun/akun.php">
  <i class='iconbawah fa fa-user fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
  <span class="iconbawah">Akun</span>
  </a>
</div>


</body>
</html>
