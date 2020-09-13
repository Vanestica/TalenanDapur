<?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "databaseta");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="keranjang.css">
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
<script language="javascript">
function del(id){
	location.href = "delete.php?id="+id;
}
</script>
<body>
	<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 7.5pt">
		<a href="../itemdetil/itemdetil.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
		<span style="position: absolute;left: 40px;top:8px;">Item Detail</span>
	</nav>

	<div class="container">
		<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 10pt">
			<div style="border: 1px solid #AEAEAE;border-radius: 3pt;padding: 4pt;height: 100%;width: 100%;padding-left: 10pt;color: #79EE47">
				<i class="fas fa-ticket-alt gly-rotate-45"></i>
				<span style="padding-left: 5pt;font-size: 90%"><b>Gunakan Kode Promo atau Kupon</b></span>
			</div>	
		</div>
		<?php
			include "koneksi.php";
				$sql = "select * from tbkeranjang";
				$query = mysqli_query($con,$sql);
				$num = mysqli_num_rows($query);
				for($x=1;$x<=$num;$x++){
				$row = mysqli_fetch_array($query);
		?>
		<form action="simpan.php" method='POST'>
		<div class="row" style="padding-left: 15px;padding-right: 15px;margin-bottom: 10pt">
			<div style="border: 1px solid #AEAEAE;border-radius: 3pt;padding: 4pt;height: 100%;width: 100%">
				<div style="width: 30%;float: left;height: 100%;border: none;">
					<!--<img style="width: 100%;height: 100%" src="data:image/jpeg; base64, <php// echo base64_encode($row["image"]); ?>"> -->
					<input type="text" id="price" name="price" hidden>
					<input type="text" id="image" name="image" hidden>
					<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($row[3]); ?>" height="100%" width="100%" id="gambar2" name="gambar2">
				</div>
				<div style="width: 67%;height: 100%;float: right;border: none;">
					<div class="row" style="padding-left: 10pt;padding-right: 12pt">
						<input type="text" id="kodeitem" name="kodeitem" value="<?php echo $row['1'];?>" hidden>
						<input type="text" id="namaitem" name="namaitem" value="<?php echo $row["2"];?>" style="border: none;float: left;width: 85%;font-weight: bold" readonly>
						<button style="border: none;background-color: white;float: left;" onclick="del(<?php echo $row[1];?>)"><i class="far fa-trash-alt"></i></button>
					</div>
					<div class="row" style="padding-left: 10pt;padding-right: 12pt">
						<span style="font-size: 80%;color: #ED503B;float: left;padding-top: 2pt">Rp.</span>
						<input type="text" id="harga" name="total" value="<?php echo $row[4]; ?>" style="border: none;background-color: white;font-size: 80%;float: left;width: 22%;color: #ED503B" readonly>/
						<input type="text" id="kuantitas" name="kuantitas" value="<?php echo $row[5]?>" style="border: none;float: left;width: 7%;color: #AEAEAE;font-size: 80%;padding-left: 3pt" readonly>
						<input type="text" name="satuan" id="satuan" value="<?php echo $row[6];?>" style="border: none;float: left;font-size: 80%;width: 20%;color: #AEAEAE" readonly>
					</div>
				</div>
						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

					</div>
			</div>
			<?php
					}
				
			?>
		</div>
		<?php
		include 'koneksi.php';

		$sql = "SELECT * FROM `tbkeranjang`";
 
		$connStatus = $con->query($sql);
 
		$numberOfRows = mysqli_num_rows($connStatus);
 
		?>
	<div style="position: fixed;bottom: 57px;border-top: 1px solid #AEAEAE;padding: 5pt;width: 100%;font-size: 110%;background-color: white">
		<span style="color: #AEAEAE;margin-left: 5pt;float: left;">Total Harga</span>
		<span style="color: #AEAEAE;margin-left: 5pt;float: left;">:</span>
		<span style="color: #ED503B;float: left;margin-left: 5pt"><b>Rp.14.000</b></span>
		<input type="submit" name="CheckOut" id="CheckOut" style="background-color: #79ee45;border: none;border-radius: 3pt;width: 80pt;height: 25pt;color: white;float: right;margin-right: 5pt;font-size: 80%" value="CheckOut (<?php echo $numberOfRows ?>)">
	</div>
		</form>


		<?php
		include 'koneksi.php';

		$sql = "SELECT * FROM `tbkeranjang`";
 
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