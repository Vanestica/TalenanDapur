<?php
include('../koneksi.php');

$sql = "SELECT * FROM tbakun";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);

?>

<!DOCTYPE html>
<html>
<head>

	<title>Daftar Akun</title>

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
function del(kodeuser)
{ 
  if(confirm("Apakah Anda yakin menghapus ini?")==true)
           window.location="delete.php?kodeuser="+kodeuser;
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
				<h1>DAFTAR AKUN</h1>
			</div>

			<div class="col-sm text-right">
				<h1>TOTAL AKUN : <?php echo $num; ?></h1>
			</div>

		</div>

		<div class="row">
			<div class="col-sm">

				<form method="POST" action="daftarakun.php">
					<div class="row">
						<div class="col-sm">
							<input type="search" style="width:90%" name="cari" class="form-control mb-3 float-left" placeholder="Cari berdasarkan nama pengguna">
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
							<th>Email</th>
							<th>No. Telp</th>
							<th>Alamat</th>
							<th>Tipe</th>
							<th>Action</th>
						</tr>
					</thead>

				<?php

				if(isset($_POST['cari'])){
						$cari = $_POST['cari'];
						$sql = "select * from tbakun where nama like '%".$cari."%'";
						$query = mysqli_query($con,$sql);		
					}else{
						$sql = "select * from tbakun";
						$query = mysqli_query($con,$sql);
					}



				while($a = mysqli_fetch_array($query)){

				?>

					<tbody>
						<tr>
							<td><?php echo $a[0]; ?></td>
							<td>
								<img class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($a[9]); ?>" height="70px" width="70px" id="foto" name="foto">
							</td>
							<td><?php echo $a[1]; ?></td>
							<td><?php echo $a[2]; ?></td>
							<td><?php echo $a[4]; ?></td>
							<td><?php echo $a[5]; ?></td>
							<td><?php echo $a[7]; ?></td>
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
				<h5>Edit Akun</h5>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</div>
				
				<div class="modal-body">
					<form action="update.php" method="POST" enctype="multipart/form-data">

					<?php
					$kodeuser = $a[0];
					$query_edit = mysqli_query($con,"SELECT * FROM tbakun WHERE kodeuser='$kodeuser'");
					while ($b = mysqli_fetch_array($query_edit)) {
					?>

					<input type="text" name="kodeuser" value="<?php echo $b[0]; ?>" hidden>

					<div class="form-group">
					<label>Nama</label>
					<input type="text" name="nama" class="form-control" value="<?php echo $b[1]; ?>">      
					</div>

					<div class="form-group">
					<label>Email</label>
					<input type="text" name="email" class="form-control" value="<?php echo $b[2]; ?>">      
					</div>

					<div class="form-group">
					<label>No. Telp</label>
					<input type="text" name="notelp" class="form-control" value="<?php echo $b[4]; ?>">      
					</div>

					<div class="form-group">
					<label>Alamat</label>
					<input type="text" name="alamat" class="form-control" value="<?php echo $b[5]; ?>">      
					</div>

					<div class="form-group">
						<label for="tipe">Tipe akun</label>
						<select name="tipe" class="custom-select mb-3">
							<option value="<?php echo $b[7]; ?>"><?php echo $b[7]; ?></option>
							<?php
							$sqltipe = "select * from tbtipe";
							$querytipe = mysqli_query($con,$sqltipe);
							while($tipe = mysqli_fetch_array($querytipe)){
							?>

							<option value="<?php echo $tipe[1]; ?>"><?php echo $tipe[1]; ?></option>

							<?php
							}
							?>
						</select>
					</div>
					
					<div class="form-group">
					<img id="image-preview" class="card-img-top" src="data:image/jpeg; base64, <?php echo base64_encode($b[9]); ?>" style="width: 150px;height: 150px;"><BR>
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
