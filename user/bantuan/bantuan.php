<!DOCTYPE html>
<html>
<head>

	<title>Bantuan</title>

	<link rel="stylesheet" type="text/css" href="bantuan.css">
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

<div class="container">
  
	<div class="form-group" style="margin-top:10px;margin-bottom:5px;">
	  <label for="ajukanpertanyaan">Ajukan pertanyaanmu</label>
	  <input type="text" class="form-control" id="ajukanpertanyaan" placeholder="Apa pertanyaanmu?">
	</div>
	
	<button type="button" style="background-color:#ED503B;color:white;margin-bottom:20px;" class="btn btn-block" data-toggle="modal" data-target="#myModal"><b>Kirim</b></button>
	
	<!-- modal -->
	<div class="modal" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

			<!-- Modal Header -->
			<div class="modal-header">
			  <h4>Terima kasih telah bertanya!</h4>
			  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>

			</div>
		</div>
	</div>
</div>

<hr style="margin:0"></hr>

<div class="faq">
	<h4><b>Frequently Asked Questions</b></h4>
</div>
  
  <div id="accordion">
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
        Apa itu Talenan Dapur
      </a>
      </div>
      <div id="collapseTwo" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Talenan Dapur adalah aplikasi yang memudahkan kehidupan dalam memenuhi kebutuhan dapur.
        </div>
      </div>
    </div>
    <div class="card">
      <div class="card-header">
        <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
          Apa tujuan Talenan Dapur
        </a>
      </div>
      <div id="collapseThree" class="collapse" data-parent="#accordion">
        <div class="card-body">
          Talenan Dapur bertujuan untuk membantu orang-orang yang biasanya bekerja di dapur seperti Ibu Rumah Tangga yang tidak memiliki waktu untuk berbelanja kebutuhan dapur. Selain itu, Talenan Dapur menyediakan resep-resep yang dapat dicoba Ibu Rumah Tangga dengan cara  yang ringkas namun jelas.
        </div>
      </div>
    </div>
  </div>
</div>


<div class="tabmenu">
  <a href="../beranda/beranda.php">
	<i class='iconbawah fa fa-home fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Beranda</span>
  </a>
  <a href="../resep/resep.php">
	<i class='iconbawah fa fa-utensils fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span class="iconbawah">Resep</span>
  </a>
  <a href="../bantuan/bantuan.php">
	<i class='fa fa-question-circle fontputih' style="font-size:18px" aria-hidden="true"></i><BR>
	<span>Bantuan</span>
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
