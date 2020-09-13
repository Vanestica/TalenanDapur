<?php

	include "koneksi.php";

	$tgl = date("Y-m-d", strtotime('tomorrow'));

	$no = $_POST["no"];
	$waktu = $_POST["waktu"];
	$wilayah =  $_POST["wilayah"];
	$kodeuser =  $_POST["kodeuser"];
	$grandtotal =  $_POST["grandtotal"];


	$sql = "insert into tbtransaksi (no, tgl, waktu, wilayah, kodeuser, grandtotal) values('$no','$tgl','$waktu','$wilayah','$kodeuser','$grandtotal')";
	$query = mysqli_query($con,$sql);

	$sql2 = "select * from tbkeranjang where no='$no'";
	$query2 = mysqli_query($con,$sql2);
	$num2 = mysqli_num_rows($query2);


	for($x=0;$x<$num2;$x++){
		$re2 = mysqli_fetch_array($query2);
		$no = $re2["no"];
		$kodeitem = $re2["kodeitem"];
		$grandtotal = $re2["total"];
		$jlh = $re2["totalkuantitas"];

		$sql3 = "insert into tbtransaksidetil (no,kodeitem,totalkuantitas,grandtotal) values('$no','$kodeitem','$jlh','$grandtotal')";
		$query3 = mysqli_query($con,$sql3);

		$sql4 = "select totalkuantitas from tbkeranjang where kodeitem='$kodeitem'";
		$query4 = mysqli_query($con,$sql4);
		$num4 = mysqli_num_rows($query4);

		for($x2=0;$x2<=$num4;$x2++){
			$re4 = mysqli_fetch_array($query4);
			$jlh2 = $re4["totalkuantitas"];

			$sql6 = "select stock from tbbarang where kodeitem='$kodeitem'";
			$query6 = mysqli_query($con,$sql6);
			$num6 = mysqli_num_rows($query6);

			for($x3=0;$x3<=0;$x3++){
				$re6 = mysqli_fetch_array($query6);
				$jlh3 = $re6["stock"];

				$jlhtotal = $jlh3 - $jlh2;

				echo $jlhtotal;


				$sql7 = "update tbbarang set stock='$jlhtotal' where kodeitem='$kodeitem'";
				$query7 = mysqli_query($con,$sql7);

			}
		}

	}

	$sql5 = "delete from tbkeranjang where no='$no'";
	$query5 = mysqli_query($con,$sql5);

header("location:../keranjang/keranjang.php");

?>