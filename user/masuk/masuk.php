<?php include('../daftar/daftardb.php') ?>

<!DOCTYPE html>
<html>
<head>

	<title>Masuk</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="masuk.css">
	<script src="jquery-3.3.1.min.js"></script>
	<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.3.1.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
	
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<script src="jquery.min.js"></script>
	<script src="bootstrap.min.js"></script>
	<script src="my-login.js"></script>
	
</head>


<body class="my-login-page">
	<section class="h-100">
		<div class="container h-100">
			<div class="row justify-content-md-center h-100">
				<div class="card-wrapper">
						<img src="../image/logo.png" style="display:block;margin: 30px auto;">
					<div class="card fat">
						<div class="card-body">
							<h4 class="card-title">Masuk</h4>
							
							<form method="POST" class="my-login-validation" novalidate="" action="masuk.php">
							
							<?php echo display_error(); ?>
							
								<div class="form-group">
									<label for="nama">Nama</label>
									<input id="nama" type="text" class="form-control" name="nama" value="" required autofocus>
									<div class="invalid-feedback">
										Nama tidak valid
									</div>
								</div>

								<div class="form-group">
									<label for="password">Password
										<a href="../lupapassword/lupapassword.php" class="float-right">
											Lupa Password?
										</a>
									</label>
									<input id="password" type="password" class="form-control" name="password" required data-eye>
								    <div class="invalid-feedback">
								    	Password dibutuhkan
							    	</div>
								</div>
<!--
								<div class="form-group">
									<div class="custom-checkbox custom-control">
										<input type="checkbox" name="remember" id="remember" class="custom-control-input">
										<label for="remember" class="custom-control-label">Ingat saya</label>
									</div>
								</div>
-->
								<div class="form-group m-0">
									<button type="submit" name="tombol_masuk" class="btn btn-primary btn-block">
										Masuk
									</button>
								</div>
								<div class="mt-4 text-center">
									Belum memiliki akun? <a href="../daftar/daftar.php">Daftar di sini</a>
								</div>
							</form>
							
						</div>
					</div>
					<div class="footer">
						Copyright &copy; 2019 &mdash; Talenan Dapur <BR>
						Vanestica Ireline - Eric Suwendy - Steven C.F.L <BR>
						XI TKJ 2 <BR>
						SMK Immanuel 1 Pontianak, Kalimantan Barat <BR>
						<img src="../image/logosmk.png" width="10%" style="margin-top:5px">
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>
