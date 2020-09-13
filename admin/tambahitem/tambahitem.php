<?php include('../koneksi.php'); ?>

<!DOCTYPE html>
<html>
<head>

	<title>Tambah Akun</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" type="text/css" href="../../source/bootstrap.min.css"><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script src="../../source/jquery-3.3.1.min.js"></script>
	<script src="../../source/proper.min.js"></script>
	<script src="../../source/jquery.min.js"></script>
	<script src="../../source/bootstrap.min.js"></script>
	<script src="../../source/my-login.js"></script>
	
	
</head>

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

<body style="background-color: #f9f9f9;width:100%;">

	<div class="container rounded shadow mt-5 mb-5 p-4 bg-white">


		<form method="POST" action="simpan.php" enctype="multipart/form-data">

			<a href="../index.php" class="text-body"><h1><i class="fa fa-arrow-left float-left"></i></h1></a>
			<center><h1>TAMBAH ITEM</h1></center>

			<div class="form-group">
				<!-- <label for="kodeuser">Kode User</label> -->
				<input id="kodeitem" type="text" class="form-control" name="kodeitem" hidden>
			</div>

			<div class="form-group">
				<label for="nama">Nama Item</label>
				<input id="nama" type="text" class="form-control" name="nama" required autofocus>
			</div>

			<div class="form-group">
				<label for="harga">Harga</label>
				<input id="harga" type="text" class="form-control" name="harga" required autofocus>
			</div>

			<div class="form-group">
				<label for="diskon">Potongan Harga</label>
				<input id="diskon" type="text" class="form-control" name="diskon">
			</div>

			<div class="form-group">
				<label for="kuantitas">Kuantitas</label>
				<input id="kuantitas" type="text" class="form-control" name="kuantitas" required>
			</div>

			<div class="form-group">
				<label for="satuan">Satuan</label>
				<select name="satuan" class="custom-select mb-3">
					<?php
					$sql = "select * from tbsatuan";
					$query = mysqli_query($con,$sql);
					while($a = mysqli_fetch_array($query)){
					?>

					<option value="<?php echo $a[1]; ?>"><?php echo $a[1]; ?></option>

					<?php
					}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="kategori">Kategori Item</label>
				<select name="kategori" class="custom-select mb-3">
					<?php
					$sql1 = "select * from tbkategori";
					$query1 = mysqli_query($con,$sql1);
					while($b = mysqli_fetch_array($query1)){
					?>

					<option value="<?php echo $b[1]; ?>"><?php echo $b[1]; ?></option>

					<?php
					}
					?>
				</select>
			</div>

			<div class="form-group">
				<label for="stock">Stock</label>
				<input id="stock" type="text" class="form-control" name="stock" required>
			</div>

			<div class="form-group">
				<label for="nutrisi">Nutrisi (dipisahkan dengan koma)</label>
				<input id="nutrisi" type="text" class="form-control" name="nutrisi">
			</div>

			<div class="form-group">
				<label for="persen">Persen (dipisahkan dengan koma)</label>
				<input id="persen" type="text" class="form-control" name="persen">
			</div>

			<div class="custom-file mt-3">
				<label>Foto Item</label>
				<img id="image-preview" class="mt-3" width="150px" height="150px" />
				<input type="file" class="custom-file-input" id="image" name="image" onchange="previewImage();">
				<label class="custom-file-label" for="image">Pilih foto item</label>
			</div>

			<div class="form-group">
				<input type="submit" value="Tambahkan" class="btn btn-block btn-danger">
			</div>

		</form>
	</div>	

</body>
</html>
