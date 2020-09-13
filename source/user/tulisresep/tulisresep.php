<!DOCTYPE html>

<?php
include 'koneksi.php';

$sql = "select * from resep";
$query = mysqli_query($con,$sql);
$num = mysqli_num_rows($query);
?>
<html>
<head>

	<title>Tulis Resep</title>

	<link rel="stylesheet" type="text/css" href="tulisresep.css">
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
	
</head>

<body style="background-color: rgb(223,223,223);">

<nav class="navbar navbar-expand-sm bar" style="height:33pt;margin-bottom: 3pt">
	<a href="../resep/resep.php"><i class="fas fa-angle-left" style="font-size: 120%;float: right;color:black;"></i></a>
	<span style="position: absolute;left: 40px;top:8px;">Tulis Resep</span>
</nav>

<div class="container">

<form action="simpan.php" method="post" enctype="multipart/form-data">

    
	
	<div class="inigambar">
		<center>
			<i><span style="font-size: 14px;margin:10px 0;">"Menggunakan foto masakanmu sendiri"</span></i>
			<img id="image-preview" />
		</center>
			<input style="margin-top:10px" type="file" name="image" id="image" onchange="previewImage();" />  
	</div>
	
		<center><h3 style="margin-bottom:20px;"><b>DATA RESEP</b></h3></center>

		<input name="koderesep" id="koderesep" type="text" hidden>
		
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Judul resep" name="judul" id="judul">
		</div>
		
		
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Lama memasak (cth: 1 jam 20 menit)" name="lama" id="lama">
		</div>
		
		<div class="form-group">
			<select class="form-control" style="width:55%;float:left;margin-right:25px;" id="tingkat" name="tingkat">
			<option>Tingkat Kesulitan</option>
			<option>Mudah</option>
			<option>Sulit</option>
			</select>
			
			<input type="text" class="form-control" style="width:15%;float:left;margin-right:10px" name="porsi" id="porsi" value="1">
			<h3 style="">porsi</h3>
		</div>
		
		
		<div class="form-group">
			<input type="text" class="form-control" placeholder="Resep oleh.. (cth: TalenanDapur)" name="oleh" id="oleh">
		</div>

		<div style="width:100%;">
			<h4 style="float:left;">BAHAN-BAHAN</h4>
			<i id="tambahbahan" class="fa fa-plus" style="font-size:20px;float:right;margin-top:8px;"></i>
		</div>
	
		<div class="form-group" id="kotakbahan" style="clear:left;">
			<input type="text" class="form-control" style="width:15%;float:left" name="kuantitas0" id="kuantitas0" value="1">
			
			<select class="form-control" style="width:25%;float:left;" id="jenisberat0" name="jenisberat0">
			<option>ons</option>
			<option>pcs</option>
			<option>liter</option>
			</select>
			
			<input type="text" class="form-control" style="float:left;width:51%" placeholder="cth: udang" name="bahan0" id="bahan0">
			
			<i id="hapusbahan" class="fa fa-times" style="font-size:20px;float:right;margin-top:10px;margin-right:2px;color:#ED503B"></i>
			
		</div>
		
		<div style="width:100%;">
			<h4 style="float:left;margin-top:20px;">ALAT-ALAT</h4>
		</div>
		
		<div class="form-group" id="kotakalat">
			
			<input type="text" class="form-control" style="float:left;width:100%" placeholder="cth: pisau, blender, talenan, etc" name="alat" id="alat">
		</div>
		
		<div style="width:100%;">
			<h4 style="float:left;margin-top:20px;">LANGKAH PEMBUATAN</h4>
			<!-- <i id="tambahlangkah" class="fa fa-plus" style="font-size:20px;float:right;margin-top:28px;"></i> -->
		</div>
				
		<div class="form-group" id="kotaklangkah">
		
		<!--
			<div style="clear:left; background-color:#ED503B; color:white;width:30px; height:30px;margin:5px; margin-left:0; font-size:20px; text-align:center; float:left">1</div>
			<input type="text" class="form-control" style="float:left;width:80%" placeholder="Pertama-tama, panaskan air di dalam panci" name="langkah" id="langkah"></input>
			<i id="hapuslangkah" class="fa fa-times" style="font-size:20px;float:right;margin-top:10px;margin-right:2px;color:#ED503B"></i>
			
			<div id="penomoran"></div>
			-->
			
			<textarea class="form-control" name="langkah" id="langkah" style="width:100%;height:200px;" placeholder="Pisahkan dengan tanda //"></textarea>
		</div>

		<input type="submit" class="btn btn-danger" id="save" name="save" value="Publikasi" style="width:100%;margin-top:20px;margin-bottom:10px;">
			
</form>

</div>
	<script>
		// Add the following code if you want the name of the file appear on select
		$(".custom-file-input").on("change", function() {
		  var fileName = $(this).val().split("\\").pop();
		  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
		});
		
		var y = 1;
		
		$(document).ready(function(){
		  $("#tambahbahan").click(function(){
			  if(y <= 10){
			$("#kotakbahan").append('<input type="text" class="form-control" style="width:15%;float:left" name="kuantitas'+y+'" id="kuantitas'+y+'" value="1"><select class="form-control" style="width:25%;float:left;" id="jenisberat'+y+'" name="jenisberat'+y+'"><option>ons</option><option>pcs</option><option>liter</option></select><input type="text" class="form-control" style="float:left;width:51%" placeholder="cth: udang" name="bahan'+y+'" id="bahan'+y+'"><i id="hapusbahan" class="fa fa-times" style="font-size:20px;float:right;margin-top:10px;margin-right:2px;color:#ED503B"></i>');
			y++;
				return true;
            }
		  });
		});
		
		
		// var c = 2;
		
		// $(document).ready(function(){
		  // $("#tambahlangkah").click(function(){
			// if(c <= 10){
				// $("#penomoran").append('<div style="clear:left;background-color:#ED503B;color:white;width:30px;height:30px;margin:5px;margin-left:0;font-size:20px;text-align:center;float:left">' + c + '</div><input type="text" class="form-control" style="float:left;width:80%" placeholder="Pertama-tama, panaskan air di dalam panci" name="langkah" id="langkah"></input><i id="hapuslangkah" class="fa fa-times" style="font-size:20px;float:right;margin-top:10px;margin-right:2px;color:#ED503B"></i>');
				// c++;
				// return true;
            // }
		  // });
		// });		
	</script>
</body>


</html>
