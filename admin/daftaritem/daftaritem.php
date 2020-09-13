<?php
include('../koneksi.php');

$sql = "SELECT * FROM tbbarang";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
?>

<!DOCTYPE html>
<html>
<head>

	<title>Daftar Item</title>

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
function del(kodeitem)
{ 
  if(confirm("Apakah Anda yakin menghapus ini?")==true)
           window.location="delete.php?kodeitem="+kodeitem;
    return true;
}

function previewImage() {
		document.getElementById("image-preview").style.display = "block";
		var oFReader = new FileReader();
		 oFReader.readAsDataURL(document.getElementById("image").files[0]);

		oFReader.onload = function(oFREvent) {
		  document.getElementById("image-preview").src = oFREvent.target.result;
		};
	  };
</script>

<body style="background-color: #f9f9f9" class="p-4">

<div class="col rounded shadow p-4 bg-white">
	<div class="container-fluid">
		<div class="row pb-4">
			<div class="col-sm">
				<a href="../index.php" class="text-body"><h1><i class="fa fa-arrow-left float-left"></i></h1></a>
				
			</div>

			<div class="col-sm text-center">
				<h1>DAFTAR ITEM</h1>
			</div>

			<div class="col-sm text-right">
				<h1>TOTAL ITEM : <?php echo $num; ?></h1>
			</div>

		</div>

		<div class="row">
			<div class="col-sm">

				<form method="POST" action="daftaritem.php">
					<div class="row">
						<div class="col-sm">
							<input type="search" style="width:90%" name="cari" class="form-control mb-3 float-left" placeholder="Cari berdasarkan nama item">
							<input class="float-right btn btn-dark ml-3 pl-4 pr-4" type="submit" value="Proses">
						</div>
					</div>
				</form>

				<table class="table" id="table">
					<thead class="thead-dark">
						<tr>
							<th>Kode</th>
							<th>Foto</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Diskon</th>
							<th>Kuantitas</th>
							<th>Satuan</th>
							<th>Stock</th>
							<th>Kategori</th>
							<th>Action</th>
						</tr>
					</thead>

				<?php

				if(isset($_POST['cari'])){
						$cari = $_POST['cari'];
						$sql = "select * from tbbarang where namaitem like '%".$cari."%'";
						$query = mysqli_query($con,$sql);		
					}else{
						$sql = "select * from tbbarang";
						$query = mysqli_query($con,$sql);
					}

				while($a = mysqli_fetch_array($query)){

				?>

					<tbody>
						<tr>
							<td><?php echo $a[0]; ?></td>
							<td>
								<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[1]); ?>" height="70px" width="70px" id="foto" name="foto">
							</td>
							<td><?php echo $a[6]; ?></td>
							<td><?php echo $a[7]; ?></td>
							<td><?php echo $a[8]; ?></td>
							<td><?php echo $a[9]; ?></td>
							<td><?php echo $a[10]; ?></td>
							<td><?php echo $a[11]; ?></td>
							<td><?php echo $a[12]; ?></td>
							<td>
								<button class="btn btn-warning" data-toggle="modal" data-target="#myModal1<?php echo $a[0]; ?>">Ubah</button>
								<button class="btn btn-danger" name="del" id="del" onclick="return del(<?php echo $a[0]; ?>)" name="" id="">Hapus</button>
							</td>
						</tr>
					</tbody>

	<div class="modal fade" id="myModal1<?php echo $a[0]; ?>" role="dialog">
		<div class="modal-dialog">
	
			<div class="modal-content">
				<div class="modal-header">
				<h5>Edit Item</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
					<form action="update.php" method="POST" enctype="multipart/form-data">

					<?php
					$kodeitem = $a[0];
					$query_edit = mysqli_query($con,"SELECT * FROM tbbarang WHERE kodeitem='$kodeitem'");
					while ($b = mysqli_fetch_array($query_edit)) {
					?>

					<input type="text" name="kodeitem" value="<?php echo $b[0]; ?>" hidden>

					<div class="form-group">
					<label>Nama</label>
					<input type="text" name="namaitem" class="form-control" value="<?php echo $b[6]; ?>">      
					</div>

					<div class="form-group">
					<label>Harga</label>
					<input type="text" name="harga" class="form-control" value="<?php echo $b[7]; ?>">      
					</div>

					<div class="form-group">
					<label>Diskon</label>
					<input type="text" name="diskon" class="form-control" value="<?php echo $b[8]; ?>">      
					</div>

					<div class="form-group">
					<label>Kuantitas</label>
					<input type="text" name="kuantitas" class="form-control" value="<?php echo $b[9]; ?>">      
					</div>

					<div class="form-group">
						<label for="satuan">Satuan</label>
						<select name="satuan" class="custom-select mb-3">
							<option value="<?php echo $b[10]; ?>"><?php echo $b[10]; ?></option>
							<?php
							$sqlsatuan = "select * from tbsatuan";
							$querysatuan = mysqli_query($con,$sqlsatuan);
							while($satuan = mysqli_fetch_array($querysatuan)){
							?>

							<option value="<?php echo $satuan[1]; ?>"><?php echo $satuan[1]; ?></option>

							<?php
							}
							?>
						</select>
					</div>

					<div class="form-group">
					<label>Stock</label>
					<input type="text" name="stock" class="form-control" value="<?php echo $b[11]; ?>">      
					</div>

					<div class="form-group">
						<label for="kategori">Kategori</label>
						<select name="kategori" class="custom-select mb-3">
							<option value="<?php echo $b[12]; ?>"><?php echo $b[12]; ?></option>
							<?php
							$sqlkategori = "select * from tbkategori";
							$querykategori = mysqli_query($con,$sqlkategori);
							while($kategori = mysqli_fetch_array($querykategori)){
							?>

							<option value="<?php echo $kategori[1]; ?>"><?php echo $kategori[1]; ?></option>

							<?php
							}
							?>
						</select>
					</div>
					
					<div class="form-group">
					<img id="image-preview" class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($b[1]); ?>" style="width: 150px;height: 150px;"><BR>
					<input type="file" name="image" id="image" onchange="previewImage();">
					</div>

					<div class="modal-footer">
					<button type="submit" class="btn btn-success">Update</button>
					</div>
				

					<?php } ?>
					</form>
				</div>
			</div>
				<?php } ?>
		</div>
	</div>

				</table>
			</div>
		</div>
	</div>	
</div>

</body>

</html>
