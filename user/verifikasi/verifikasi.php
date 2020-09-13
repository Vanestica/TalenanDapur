<!DOCTYPE html>
<html>
<head>
	<title>Verifikasi Email</title>
	
	<link rel="stylesheet" type="text/css" href="verifikasi.css">
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

<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 3pt">
	<a href="../editakun/editakun.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Verifikasi Email</span>
</nav>

<div class="container">
  
	<div class="form-group" style="margin-top:10px;margin-bottom:10px;">
		<label>Tekan verifikasi untuk mendapatkan link verifikasi.</label>
		<i class="fa fa-envelope" aria-hidden="true" style="font-size:28px;float:left;margin:0 5px;margin-top:5px;"></i>
		<input type="text" class="form-control" id="verifikasi" placeholder="Email" value="vanestica@gmail.com" style="float:left;width:87%;margin-bottom:10px">
	</div>
	
	<button type="button" style="background-color:#ED503B;color:white;margin-top:20px;" class="btn btn-block" data-toggle="modal" data-target="#myModal"><b>Verifikasi</b></button>
	
	<!-- modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
			  <h4>Link verifikasi telah terkirim.</h4>
			  <a href="../sudahverifikasi/sudahverifikasi.php"><button type="button" class="btn btn-danger">Close</button></a>
			</div>

			</div>
		</div>
	</div>
</div>

</body>
</html>
