<?php 

session_start();

include "koneksi.php";

error_reporting(E_ALL^(E_NOTICE|E_WARNING));
if(!isset($_SESSION['username'])){
	die("Anda belum login");
}

$username = $_SESSION['username'];
$level=$_SESSION['level'];

if ($level=='Admin') {
?>
	<script language="JavaScript">
        alert('Anda Login sebagai Admin');
        document.location='input_data_barang.php';
    </script>
<?php 
} elseif ($level=='Pengguna') {
?>
	<script language="JavaScript">
        alert('Anda Login sebagai Pengguna');
        document.location='penjualan.php';
    </script>
<?php      
}
?>

