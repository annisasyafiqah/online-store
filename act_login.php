<?php 
session_start();
include "koneksi.php";

$username = $_POST['username'];
$password = md5($_POST['password']);

$op = $_GET['op'];

if($op == "in"){

	$query_l="SELECT * from register where username = '$username' AND password = '$password'";
	$h_l = $koneksi ->query($query_l);
	
	if(mysqli_num_rows($h_l)==1){
		$d_l = $h_l ->fetch_array();

		$_SESSION['username'] = $d_l['username'];
		$_SESSION['level'] = $d_l['level'];

		if($d_l['level']=="Admin"){
			header("location:home.php");
			
		}elseif ($d_l['level']=="Pengguna") {
			header("location:home.php");
			
		}

	}else{
?>
    <script language="JavaScript">
        alert('Username atau Password tidak sesuai. Silahkan diulang kembali!');
        document.location='formlogin.php';
    </script>
<?php
    }

}else if($op=="out"){
    unset($_SESSION['username']);
    unset($_SESSION['level']);
    header("location:formlogin.php");
}
?>