<?php 
session_start();

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'talenandapur');

// variable declaration
$kodeuser = "";
$nama = "";
$email = "";
$password = "";
$notelp    = "";
$alamat = "";
$errors   = array();

// call the register() function if tombol_daftar is clicked
if (isset($_POST['tombol_daftar'])) {
	register();
}

// REGISTER USER
function register(){
	// call these variables with the global keyword to make them available in function
	global $db, $errors, $kodeuser, $nama, $email, $password, $notelp, $alamat;

	// receive all input values from the form. Call the e() function
    // defined below to escape form values
	$kodeuser    =  e($_POST['kodeuser']);
	$nama    =  e($_POST['nama']);
	$email       =  e($_POST['email']);
	$password  =  e($_POST['password']);
	$notelp  =  e($_POST['notelp']);
	$alamat  =  e($_POST['alamat']);

	// form validation: ensure that the form is correctly filled
	if (empty($nama)) { 
		array_push($errors, "Nama tidak boleh kosong"); 
	}
	if (empty($email)) { 
		array_push($errors, "Email tidak boleh kosong"); 
	}
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      array_push($errors, "Email tidak benar."); 
	}
	if (empty($password)) { 
		array_push($errors, "Password tidak boleh kosong"); 
	}
	if (strlen($password) < 9) {
           array_push($errors, "Password harus lebih dari 8 karakter"); 
    }
	if (empty($notelp)) { 
		array_push($errors, "Nomor Telepon tidak boleh kosong"); 
	}
	if (!is_numeric($notelp)) {
		array_push($errors, "Nomor Telepon harus angka."); 
	}
	if (empty($alamat)) { 
		array_push($errors, "Alamat tidak boleh kosong"); 
	}
	
	//if ($password_1 != $password_2) {
	//	array_push($errors, "The two passwords do not match");
	//}

	// register user if there are no errors in the form
	if (count($errors) == 0) {
		$password = md5($password);//encrypt the password before saving in the database

		// if (isset($_POST['tipe'])) {
			// $tipe = e($_POST['tipe']);
			// $query = "INSERT INTO daftar (nama, email, password) 
					  // VALUES('$nama', '$email' '$password')";
			// mysqli_query($db, $query);
			// $_SESSION['success']  = "Berhasil membuat akun.";
			// header('location: ../masuk/masuk.php');
		// }else{
			$query = "INSERT INTO tbakun (nama, email, password, notelp, alamat) 
					  VALUES('$nama', '$email', '$password', '$notelp', '$alamat')";
			mysqli_query($db, $query);

			// get id of the created user
			$logged_in_user_id = mysqli_insert_id($db);

			$_SESSION['user'] = getUserById($logged_in_user_id); // put logged in user in session
			$_SESSION['success']  = "You are now logged in";
			header('location:../masuk/masuk.php');				
		}
	}

// return user array from their id
function getUserById($id){
	global $db;
	$query = "SELECT * FROM tbakun WHERE kodeuser=" . $kodeuser;
	$result = mysqli_query($db, $query);

	$user = mysqli_fetch_assoc($result);
	return $user;
}

// escape string
function e($val){
	global $db;
	return mysqli_real_escape_string($db, trim($val));
}

function display_error() {
	global $errors;

	if (count($errors) > 0){
		echo '<div class="error">';
			foreach ($errors as $error){
				echo $error .'<br>';
			}
		echo '</div>';
	}
}

function isLoggedIn()
{
	if (isset($_SESSION['user'])) {
		return true;
	}else{
		return false;
	}
}

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}



//login




if (isset($_POST['tombol_masuk'])) {
	login();
}

// LOGIN USER
function login(){
	global $db, $nama, $errors;

	// grap form values
	$nama = e($_POST['nama']);
	$password = e($_POST['password']);

	// make sure form is filled properly
	if (empty($nama)) {
		array_push($errors, "Nama tidak boleh kosong");
	}
	if (empty($password)) {
		array_push($errors, "Password tidak boleh kosong");
	}

	// attempt login if no errors on form
	if (count($errors) == 0) {
		$password = md5($password);

		$query = "SELECT * FROM tbakun WHERE nama='$nama' AND password='$password' LIMIT 1";
		$results = mysqli_query($db, $query);

		if (mysqli_num_rows($results) == 1) { // user found
			// check if user is admin or user
			$logged_in_user = mysqli_fetch_assoc($results);
			if ($logged_in_user['tipe'] == 'admin') {

				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "";
				header('location: ../../admin/add/add.php');		  
			}else{
				$_SESSION['user'] = $logged_in_user;
				$_SESSION['success']  = "";

				header('location: ../beranda/beranda.php');
			}
		}else {
			array_push($errors, "Wrong username/password combination");
		}
	}
}