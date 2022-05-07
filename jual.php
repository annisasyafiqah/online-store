<?php 
include "koneksi.php";
$kode_barang = $_POST['kode_barang'];
$harga = $_POST['harga'];
$qty = $_POST['qty'];
$total = $harga * $qty;

$sql="INSERT INTO penjualan (kode_barang, harga, qty, total) 
VALUES ('".$kode_barang."','".$harga."','".$qty."','".$total."')";

$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Penjualan berhasil!');
        document.location='penjualan.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>