<?php
include "koneksi.php";

$sql = "select * from Wishlist";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

?>
<!DOCTYPE html>
<html>
<head>

	<title></title>

	<link rel="stylesheet" type="text/css" href="wishlistitem.css">
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

<script language="javascript">
function del(kodeitem){
	location.href = "delete.php?kodeitem="+kodeitem;
}

</script>
<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 3pt">
	<a href="../beranda/beranda.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Wishlist</span>
</nav>
<div class="container">
	<div style="width: 100%;height: 31pt;border: none;margin-top: 10pt;margin-bottom: 5pt">
		<button class="fav1">Item Favorit</button>
		<a href="../wishlistmenu/wishlistmenu.php"><button class="fav2">Menu Favorit</button></a>
	</div>
	<?php
		$sql = "select * from wishlist";
		$query = mysqli_query($con,$sql);
		$num = mysqli_num_rows($query);
			for($x = 0; $x < $num; $x++){
				$h = mysqli_fetch_array($query);
	?>
<div style="border: none;width: 50%;float: left;height: 100%;padding: 5pt">
	<div style="border: 1pt solid #AEAEAE;border-radius:3pt ;width: 100%;height: 100%;padding:5pt">
		<div style="border: none;width: 100%;height: 110PX;">
			<img src="../image/buah-naga.jpg" style="width: 100%;height: 100%">
    		<!-- <img src="data:image/jpeg; base64, <?php echo base64_encode($foto); ?>" id="image" name="image" style="width: 100%;height: 100%;"> -->
    	</div>
    			<div class="main top-right">
		  			<button style="border: none;background-color: transparent;color: red;margin-left: -12px;" href="javascript:void(0)" onclick="del(<?php echo "'$h[0]'";?>)" style="color:red;" id="save" name="save" value="save">
		   	 		<i class="fa fa-heart"></i></button>
				</div>
				<div id="kodeitem" hidden></div>
				<div class="judulitem">
					<span id="nama"><?php echo $h[2];?></span>
				</div>
				<div class="kuantitasitem">
					<span id="kuantitas"><?php echo $h[4]; ?></span>
					<span id="satuan"><?php echo $h[5];?></span>
				</div>
				<div class="hargaitem">
					<span id="harga">Rp. <?php echo $h[3];?></span>
				</div>
			</div>
				</div>
		  	<?php } ?>
  		</div>
 	</div>
</div>
</body>
</html>
