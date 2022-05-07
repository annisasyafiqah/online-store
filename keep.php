<?php 
session_start();
include "koneksi.php";
$user = $_GET['username'];
$pwd = md5($_GET['password']);


	$query_l="SELECT * from register where username = '$user' AND password = '$pwd'";
	$h_l = $koneksi ->query($query_l);
	
	if(mysqli_num_rows($h_l)==1){
		$d_l = $h_l ->fetch_array();
		$_SESSION['username'] = $d_l['username'];
		$_SESSION['level'] = $d_l['level'];
		if($d_l['level']=="Admin"){
			header("location:home.php");
			//echo "admin";
		}elseif ($d_l['level']=="Mahasiswa") {
			header("location:home.php");
			//echo "mahasiswa";
		}elseif ($d_l['level'] =="Dosen") {
			header("location:home.php");
			//echo "dosen";
		}else{
			die("password salah <a href=\"javascript:history.back()\">kembali</a>");
		}
	} else{
	 	unset($_SESSION['username']);
	unset($_SESSION['level']);
	header("location:formlogin.php");	
	}
 	
 	// berfungsi menyeleksi data user dengan username dan password yang sesuai
$sql = mysqli_query($con,"SELECT * from register where username = '$user' AND password = '$pwd'");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah username dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai admin
	if($data['level']=="admin"){
		// berfungsi membuat session
		$_SESSION['nama'] =  $data['nama_lengkap'];
		$_SESSION['level'] = "admin";
		//berfungsi mengalihkan ke halaman admin
		header("location:home.php");
	// berfungsi mengecek jika user login sebagai moderator
	}else if($data['level']=="moderator"){
		// berfungsi membuat session
		$_SESSION['nama'] = $data['nama_lengkap'];
		$_SESSION['level'] = "moderator";
		// berfungsi mengalihkan ke halaman moderator
		header("location:home.php");

	}else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		header("location:formlogin.php?alert=gagal");
	}	
}else{
	header("location:index.php?alert=gagal");
}
?>