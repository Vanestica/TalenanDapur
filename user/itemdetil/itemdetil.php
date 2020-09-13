
<!DOCTYPE html>
<?php
	include 'koneksi.php';

?>
<html>
<head>

	<title>Item Detil</title>

	<link rel="stylesheet" type="text/css" href="itemdetil.css">
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
	<script src="js/index.js"></script>

<script>
$(function() {
  // This button will increment the value
  $('.qtyplus').click(function(e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr('field');
    // Get its current value
    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
    // If is not undefined
    if (!isNaN(currentVal)) {
      // Increment
      $('input[name=' + fieldName + ']').val(currentVal + 1);

		var angka1 = document.getElementById('harga').value;
		var angka2 = document.getElementById('quantity').value;
		var angka3 = document.getElementById('kuantitas').value;
		var perkalian = parseInt(angka1)*parseInt(angka2);
		var perkalian2 = parseInt(angka3)*parseInt(angka2);

		document.getElementById('total').value = perkalian;
		document.getElementById('totalkuantitas').value = perkalian2;
    } else {
      // Otherwise put a 0 there
      $('input[name=' + fieldName + ']').val(0);
    }
  });
  // This button will decrement the value till 0
  $(".qtyminus").click(function(e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr('field');
    // Get its current value
    var currentVal = parseInt($('input[name=' + fieldName + ']').val());
    // If it isn't undefined or its greater than 0
    if (!isNaN(currentVal) && currentVal > 0) {
      // Decrement one
      $('input[name=' + fieldName + ']').val(currentVal - 1);

		var angka1 = document.getElementById('harga').value;
		var angka2 = document.getElementById('quantity').value;
		var angka3 = document.getElementById('kuantitas').value;
		var perkalian = parseInt(angka1)*parseInt(angka2);
		var perkalian2 = parseInt(angka3)*parseInt(angka2);

		document.getElementById('total').value = perkalian;
		document.getElementById('totalkuantitas').value = perkalian2;
    } else {
      // Otherwise put a 0 there
      $('input[name=' + fieldName + ']').val(0);
    }
  });
});

function keranjang() {
		alert("Item telah ditambah ke keranjang");
	}
</script>
</head>

<body>
<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 7.5pt">
	<a href="../beranda/beranda.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Item Detail</span>
</nav>
<?php


	include 'koneksi.php';

	$kodeitem = $_GET["kodeitem"];

	$sql1 ="select * from tbbarang where kodeitem='$kodeitem'";

	$query1 = mysqli_query($con,$sql1);
	$num1 = mysqli_num_rows($query1);

	while ($a = mysqli_fetch_array($query1)) {
?>

<div class="container">


	
	<form action="simpan.php" method="post">
	<div class="row" style="padding-left: 15px;padding-right: 15px">
		<div class="b1">
			<div class="box1">
				<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[1]); ?>" height="100%" width="100%" id="gambar1" name="gambar1">
				<input type="text" id="gambar1" name="gambar1" hidden>
			</div>
		</div>

		<input type="text" name="kodeitem" id="kodeitem"  value="<?php echo $a[0];?>" hidden>
		<div class="b2">
			<div class="box2">
				<center style="border-bottom: 1px solid #AEAEAE;font-size">Nutrisi</center>
				<div style="float:left;line-height: 3px;font-size: 80%;margin-top:10px">
					<p>Air</p>
					<p>Karbohidrat</p>
					<p>Protein</p>
					<p>Lemak</p>
					<p>Serat</p>
					<p>Calcium</p>
					<p>Fosfor</p>
					<p>Vitamin C</p>
				</div>
				<div style="float:right;line-height: 3px;font-size: 80%;margin-top: 10px">
					<p>90,20%</p>
					<p>11,50%</p>
					<p>0,53%</p>
					<p>0,40%</p>
					<p>0,71%</p>
					<p>100g</p>
					<p>8,70%</p>
					<p>9,40%</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 10pt">
		<div class="b1">
			<div class="box3">
				<div class="img1">
					<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[1]); ?>" height="100%" width="100%" id="gambar2" name="gambar2">
				</div>
				<div class="img1">
					<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[1]); ?>" height="100%" width="100%" id="gambar3" name="gambar3">
				</div>
			</div>
		</div>
	</div>


<div class="row">
	<div class="col" style="padding-right:0;">
		<div class="kotakabu">
			<div class="row" style="padding: 5px 20px;padding-bottom:0;">
				<input type='text' name='namaitem' id='namaitem' readonly value='<?php echo $a[6];?>' style='width:60%;background-color:#E8E8E8;border:none;float:left'>
				<span style="float:right">Stok : <?php echo $a[11]; ?></span>
			</div>

			<div class="row" style="padding: 0px 20px">
				<input type="text" name="harga" id="harga" value="<?php echo $a[7];?>" readonly style="clear:left;width: 50%;background-color: #E8E8E8;border: none;float:left">

				<span style="margin-right: 2pt">/</span>

				<input type="text" name="kuantitas" id="kuantitas" value="<?php echo $a[9];?>" style="width: 15%;border: none;background-color: #E8E8E8;float: left;height: 15pt">

				<input type="text" name="satuan" id="satuan" value="<?php echo $a[10];?>" style="width: 30%;border: none;background-color: #E8E8E8;float: left;height: 15pt" readonly>
			</div>

			<div style="margin:0 6px;border-bottom: 1px solid #AEAEAE;margin-top : 0pt;padding-bottom: 2pt"></div>

			<div class="row" style="margin:0 10px;margin-top:8px">
				<input type='button' value='-' class='qtyminus' field='quantity' style="height: 17pt"  />
				<input type='text' name='quantity' field="quantity" id="quantity" value='1' class='qty' style="width: 45%;margin:0 5pt;text-align: center;" disabled>
				<input type='button' value='+' class='qtyplus' field='quantity' />
			</div>

			<div class="row" style="padding: 0px 20px;margin-top:5px">
				<span style="float: left;margin-right:8px">Total : </span>

				<input style="width: 50%;float: left;background-color: #E8E8E8;border: none;padding-top:0px" type="text" name="total" id="total" readonly value="<?php echo $a[7]; ?>">
			</div>

			<div class="row" style="padding: 0px 20px">
				<input type="text" style="width: 15%;float: right;border: none;background-color: #E8E8E8;padding-bottom: 3pt;" name="totalkuantitas" id="totalkuantitas" value="<?php echo $a[9]; ?>">

				<input type="text" style="width: 30%;float: right;border: none;background-color: #E8E8E8;padding-bottom: 3pt;" name="" id="" value="<?php echo $a[10]; ?>">
			</div>
		</div>
	</div>

	<div class="col" style="padding-left:0;">
		<button class="butn" style="height: 25pt;width: 100pt;float: left;margin-bottom: 7pt"><b><center>Beli Sekarang</center></b></button>
		<input type="submit" name="save" id="save" value="Add to Cart" class="butn2" style="height: 25pt;width: 100pt;float: left;">
	</div>
</div>


<?php } ?>




	<div style="border: none;width: 100%;height: 100%;font-size: 80%">
		<b>Resep yang terkait</b>
	</div>
	<div class="row" style="border: none; margin: 0px;height: 100%">
		<div style="width: 50%;height: 100%;padding: 3pt 5pt 3pt 0pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/jus2.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span><br>
			<span style="font-size: 8pt;color: black"><b>Jus Buah Naga, Rasakan Enaknya di Siang Hari</b></span>
		</div>
	</div>
</div>
		<div style="width: 50%;height: 100%;padding: 3pt 0pt 3pt 5pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/tomyam.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span>
			<span style="font-size: 8pt;color: black"><b>Tomyam, Perpaduan Rasa Yang Nikmat</b></span>
		</div>
	</div>
</div>
</div>
	<div class="row" style="border: none; margin: 0px;height: 100%">
		<div style="width: 50%;height: 100%;padding: 3pt 5pt 3pt 0pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/jus2.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span><br>
			<span style="font-size: 8pt;color: black"><b>Jus Buah Naga, Rasakan Enaknya di Siang Hari</b></span>
		</div>
	</div>
</div>
		<div style="width: 50%;height: 100%;padding: 3pt 0pt 3pt 5pt;border: none">
			<div style="width: 100%;height: 100%;border: 1px solid #AEAEAE;border-radius: 3pt">
				<div style="width: 100%;height: 100px">
				<img src="../image/tomyam.jpg" width="100%" height="100%">
				</div>
			<div class="keterangan" style="line-height: 10pt;margin-bottom: 5pt;margin-left: 3pt">
			<span style="margin-left:4px"><i class="far fa-clock" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">1h 30m</span>
			<span style=""><i class="fas fa-utensils" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">Gampang</span>
			<span style=""><i class="fas fa-concierge-bell" style="font-size: 7pt"></i></span>
			<span style="font-size: 5pt">2 Porsi</span>
			<span style="font-size: 8pt;color: black"><b>Tomyam, Perpaduan Rasa Yang Nikmat</b></span>
		</div>
	</div>
</div>
</div>
</form>
</div>

		<?php
		include 'koneksi.php';

		$sql = "SELECT * FROM tbkeranjang";
 
		$connStatus = $con->query($sql);
 
		$numberOfRows = mysqli_num_rows($connStatus);
 
		?>

<div class="tabmenu" style="width: 100%">
  <a href="../beranda/beranda.php">
	<i class='fa fa-home fontputih' style="font-size:18px;" aria-hidden="true"></i><BR>
	<span>Beranda</span>
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
	<i class='iconbawah fa fa-user fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Akun</span>
  </a>
</div>


</body>
</html>
