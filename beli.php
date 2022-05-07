<?php 
include "koneksi.php";
$kode_barang = $_POST['kode_barang'];
$qty = $_POST['qty'];

$sql="INSERT INTO pembelian (kode_barang, qty) VALUES ('".$kode_barang."','".$qty."')";
$a=$koneksi->query($sql);
			if($a == true){
?>
<script language="JavaScript">
        alert('Penambahan stok berhasil!');
        // document.location='formlogin.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>