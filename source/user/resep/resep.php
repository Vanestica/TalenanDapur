<?php

	include 'koneksi.php';
	session_start();
	$sql = "select * from resep";
	$query = mysqli_query($con, $sql);
	$num = mysqli_num_rows($query)+1;
	
?>

<!DOCTYPE html>
<html>
<head>

	<title>Resep</title>

	<link rel="stylesheet" type="text/css" href="resep.css">
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
	
	
	<script language="javascript">
		function del(koderesep){
			location.href = "delete.php?koderesep="+koderesep;
		}
	</script>
</head>

<body>

<!-- atas -->
<nav class="navbar navbar-expand-sm warnaheader">
    <input class="form-control caribar" type="text" name="search" id="search" onkeyup="searchQuery(this.value)" onfocus="searchQuery(this.value)" placeholder="Cari resep">
  <a href="../tulisresep/tulisresep.php"><i class='fas fa-edit fontputih' style="font-size:18px"></i></a>
  <a href="../kategoriresep/kategoriresep.php"><i class='fas fa-th fontputih' style="font-size:19px;margin-top:3px;"></i></a>
</nav>

<?php
include "koneksi.php";

$sql = "select * from resep";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

?>
<!-- untuk ajax
<div id="data"></div>
-->

<!-- carousel -->
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

<!-- content -->

<script>
	function previewImage() {
		document.getElementById("image-preview").style.display = "block";
		var oFReader = new FileReader();
		 oFReader.readAsDataURL(document.getElementById("image").files[0]);

		oFReader.onload = function(oFREvent) {
		  document.getElementById("image-preview").src = oFREvent.target.result;
		};
	  };
	</script>


<div class="container">

<?php

for($x = 0; $x < $num; $x++){
		$h = mysqli_fetch_array($query);
?>
  <div class="card menunya" style="width:330px">
    <img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($h[1]); ?>" style="width: 328px;height: 164px;">

		
		<button type="button" style="background-color:transparent;border:none;" class="top-left" data-toggle="modal" data-target="#myModal">
			<i class="fa fa-times" aria-hidden="true"></i>
		</button>
		
		<button style="background-color:transparent;border:none;" class="top-left2" data-toggle="modal" data-target="#myModal1<?php echo $h[0]; ?>">
			<i class="fa fa-pen" aria-hidden="true" style="font-size:12px"></i>
		</button>
		
		<!-- The Modal -->
		  <div class="modal" id="myModal">
			<div class="modal-dialog">
			  <div class="modal-content">
			  
				<!-- Modal Header -->
				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<!-- Modal body -->
				<div class="modal-body">
				  Yakin menghapus?
				</div>
				
				<!-- Modal footer -->
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
				  <button type="button" class="btn btn-success" data-dismiss="modal" onclick="del(<?php echo "'$h[0]'";?>)">Ya</button>
				</div>
				
			  </div>
			</div>
		  </div>
		  
		
		<!--<div class="top-right"><i class="far fa-heart" aria-hidden="true"></i></div>-->
    <div class="keterangan">
		<span style="margin-left:4px;"><i class='fas fa-clock' style="font-size:10px"></i></span>
		<span style="margin-right:6px;margin-left:2px;"><?php echo $h[3];?></span>
		<span><i class='fas fa-level-up-alt' style="font-size:10px"></i></span>
		<span style="margin-right:6px;margin-left:2px;"><?php echo $h[4];?></span>
		<span><i class='fas fa-utensils' style="font-size:10px"></i></span>
		<span style="margin-right:6px;margin-left:3px;"><?php echo $h[5];?> porsi</span>
		
		
			<span class="resepby">By : <?php echo $h[6];?></span>
    </div>
	
	
	<div class="judulmenu">
		<a href="../resepdetil/resepdetil.php?koderesep=<?= $h[0]; ?>">
			<span><?php echo $h[2];?></span>
		</a>
	</div>
	
	<div class="ketbu">
		<span name="deskripsi" id="deskripsi"><?php echo $h[7];?></span>
	</div>
  </div>
  
  <div class="modal fade" id="myModal1<?php echo $h[0]; ?>" role="dialog">
		<div class="modal-dialog">
	
			<div class="modal-content">
				<div class="modal-header">
				<h5>Edit</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
					<form role="form" action="updatenya.php" method="post" enctype="multipart/form-data">

					<?php
					$koderesep = $h[0];
					$query_edit = mysqli_query($con,"SELECT * FROM resep WHERE koderesep='$koderesep'");
					while ($a = mysqli_fetch_array($query_edit)) {
					?>
					<input type="hidden" name="koderesep" value="<?php echo $a[0]; ?>">

					<div class="form-group">
					<label>Judul Resep</label>
					<input type="text" name="judul" class="form-control" value="<?php echo $a[2]; ?>">      
					</div>
					
					<div class="form-group">
					<label>Lama Masak</label>
					<input type="text" name="lama" class="form-control" value="<?php echo $a[3]; ?>">      
					</div>
					
					<div class="form-group">
					<label>Tingkat Kesulitan</label>
					<input type="text" name="tingkat" class="form-control" value="<?php echo $a[4]; ?>">      
					</div>
					
					<div class="form-group">
					<label>Porsi</label>
					<input type="text" name="porsi" class="form-control" value="<?php echo $a[5]; ?>">      
					</div>
					
					<div class="form-group">
					<label>Dibuat oleh</label>
					<input type="text" name="oleh" class="form-control" value="<?php echo $a[6]; ?>">      
					</div>

					<div class="form-group">
					<label>Deskripsi</label>
					<input type="text" name="deskripsi" class="form-control" value="<?php echo $a[7]; ?>">      
					</div>
					
					<div class="form-group">
					<label>Gambar</label>
					<img id="image-preview" class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($h[1]); ?>" style="width: 308px;height: 144px;">
					<input type="file" name="image" id="image" onchange="previewImage();">
					</div>

					<div class="modal-footer">  
					<button type="submit" class="btn btn-success">Update</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
					<?php } ?>        
					</form>
			</div>
	</div>
  
  
<?php } ?>
</div>

	<div id="hasil_search"></div>

	<div id="data" style="padding: 10px 30px"></div>
	<input type="text" name="" id="kodeuser" style="visibility: hidden;">


<!-- footer -->
<div class="tabmenu">
  <a href="../beranda/beranda.php">
	<i class='iconbawah fa fa-home fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Beranda</span>
  </a>
  <a href="../resep/resep.php">
	<i class='fa fa-utensils fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span>Resep</span>
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
