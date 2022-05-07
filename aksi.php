<?php 
include "koneksi.php";
$username = $_POST['username'];
$password = md5($_POST['password']);
$email = $_POST['email'];
$namalengkap = $_POST['namalengkap'];
$level = $_POST['level'];

$sql="INSERT INTO register (username, password, email, namalengkap, level) 
	 VALUES ('".$username."','".$password."','".$email."','".$namalengkap."','".$level."')";
$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Registrasi berhasil!');
        document.location='formlogin.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>