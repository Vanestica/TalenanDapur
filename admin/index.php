<?php
include "koneksi.php";


// laporan tanggal 8 mei 2019
// tanggal 19 mei kumpulin : 
// ss tampilan yang udah diperbaiki, timesheet
// selesaikan apa yang disaranakna bapak, lalu ap ayang disuruh bapak biar aman nilainya.
// untuk yang login dan logout juga dibenerin (belakangan)
// melampirkan

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Utama Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/Chart.min.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<script>
        $(document).ready(function () {
            showGraph();
        });

        function showGraph()
        {
            {
                $.post("report/data.php",
                function (data)
                {
                    console.log(data);
                    var wilayah = [];
                    var tempat = [];

                    for (var i in data) {
                        wilayah.push(data[i].wilayah);
                        tempat.push(data[i].tempat);
                    }

                    var chartdata = {
                        labels: wilayah,
                        datasets: [
                            {
                                label: 'Wilayah yang Banyak Order',
                                backgroundColor: ["#c16a6a", "#c1b869", "#86c168", "#67c1a0", "#6680c1", "#ab65c1"],
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: tempat,
                            }
                        ]
                    };

                    var ctx = $("#graphCanvas");

                    new Chart(ctx, {
                      type: 'bar',
                      data: chartdata,
                      options: {
                        scales: {
                          yAxes: [{
                            ticks: {
                              beginAtZero: true,
                              callback: function(value) {if (value % 1 === 0) {return value;}}
                            }
                          }]
                        }
                      }
                    });

                });
            }
        }
</script>

<script>
        $(document).ready(function () {
            showGraph1();
        });

        function showGraph1()
        {
            {
                $.post("report/data1.php",
                function (data)
                {
                    console.log(data);
                    var bulan = [];
                    var jumlah = [];

                    for (var i in data) {
                        bulan.push(data[i].bulan);
                        jumlah.push(data[i].jumlah);
                    }

                    var chartdata = {
                        labels: bulan,
                        datasets: [
                            {
                                label: 'Transaksi Perbulan',
                                backgroundColor: ["#f2aa96", "#e2f195", "#95f0d5", "#b795ef", "#ed95ef", "#95efa2"],
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: jumlah,
                            }
                        ]
                    };

                    var ctx = $("#graphCanvas1");

                    new Chart(ctx, {
                      type: 'pie',
                      data: chartdata,
                      options: {
                          layout: {
                              padding: {
                                  left: 60,
                                  right: 0,
                                  top: 0,
                                  bottom: 0
                              }
                          }
                        }
                    });

                });
            }
        }
</script>


<body style="background-color: #f9f9f9">

<!--
<div class="container-fluid">
  <div class="row pt-4 pr-3 pl-3">
    <div class="col-sm">
      <h4>Selamat datang, <strong>Admin</strong></h4>
    </div>
    <div class="col-sm text-right">
      <a href=""><h4>Keluar</h4></a>
    </div>
  </div>
</div>
-->

<div class="container-fluid">

  <div class="container-fluid">
    <div class="row">
      <div class="menu1 rounded col-sm p-3 mt-3 mr-3 shadow-sm">
        <a href="tambahakun/tambahakun.php">
          <h1><i class="fa fa-user-plus mr-2 float-left iconmenu"></i></h1>
          <h5>Tambah akun</h5>
        </a>
      </div>
      <div class="menu1 rounded col-sm p-3 mt-3 mr-3 shadow-sm">
        <a href="tambahitem/tambahitem.php">
          <h1><i class="fa fa-plus-circle mr-3 float-left iconmenu"></i></h1>
          <h5>Tambah item</h5>
        </a>
      </div>
      <div class="menu1 rounded col-sm p-3 mt-3 mr-3 shadow-sm">
        <a href="daftarakun/daftarakun.php">
          <h1><i class="fa fa-id-card mr-3 float-left iconmenu"></i></h1>
          <h5>Daftar akun</h5>
        </a>
      </div>
      <div class="menu1 rounded col-sm p-3 mt-3 mr-3 shadow-sm">
        <a href="daftaritem/daftaritem.php">
          <h1><i class="fa fa-list mr-3 float-left iconmenu"></i></h1>
          <h5>Daftar item</h5>
        </a>
      </div>
      <div class="menu1 rounded col-sm p-3 mt-3 mr-3 shadow-sm">
        <a href="pesan/pesan.php">
          <h1><i class="fa fa-envelope mr-3 float-left iconmenu"></i></h1>
          <h5>Pesan <span class="badge badge-warning">New</span></h5>
        </a>
      </div>
      <div class="menu1 rounded col-sm p-3 mt-3 shadow-sm">
        <a href="resep/resep.php">
          <h1><i class="fa fa-cutlery mr-3 float-left iconmenu"></i></h1>
          <h5>Resep <span class="badge badge-warning">New</span></h5>
        </a>
      </div>
    </div>  
  </div>

  
  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-sm-7 shadow-sm p-4 m-3 rounded bg-white">
        <h4 class="pb-2">Pemesanan</h4>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Pembeli</th>
              <th>Driver</th>
              <th>Tanggal Kirim</th>
              <th>Waktu Kirim</th>
              <th>Ket</th>
              <th>Rincian</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1 TR-1</td>
              <td>John</td>
              <td>Doe</td>
              <td>2019-05-05</td>
              <td>Pagi</td>
              <td>Proses</td>
              <td>
                <button type="button" class="btn btn-primary">Tampilkan</button>
              </td>
            </tr>
            <tr>
              <td>2 TR-1</td>
              <td>Mary</td>
              <td>Moe</td>
              <td>2019-05-04</td>
              <td>Siang</td>
              <td>Berhasil</td>
              <td>
                <button type="button" class="btn btn-primary">Tampilkan</button>
              </td>
            </tr>
            <tr>
              <td>3 TR-5</td>
              <td>July</td>
              <td>Dooley</td>
              <td>2019-05-05</td>
              <td>Sore</td>
              <td>Tunda</td>
              <td>
                <button type="button" class="btn btn-primary">Tampilkan</button>
              </td>
            </tr>
          </tbody>
        </table>
        <span class="float-right"><a href="">Selengkapnya...</a></span>
      </div>

      <div class="col-sm p-5 m-3 shadow-sm bg-white">
        <div id="chart-container">
          <canvas id="graphCanvas"></canvas>
        </div>
      </div>
    </div>
  </div>

 <!--  <div class="container-fluid">
    <div class="row">
      <div class="float-left">total user, total admin, total driver, jumlah transaksi berhasil</div>
      
      <div class="mx-auto"><img src="hehe"></div>

      <div class="float-right">Float right</div>
    </div>
  </div> -->

  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 p-5 m-3 shadow-sm bg-white">
        <div id="chart-container">
          <p>Transaksi Perbulan (bulan dinyatakan dalam bentuk angka)</p>
          <canvas id="graphCanvas1"></canvas>
        </div>
      </div>
    </div>
  </div>


</div>

</body>
</html>
