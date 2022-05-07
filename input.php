
 <?php 
include "koneksi.php";
$kode_barang = $_POST['kode_barang'];
$nama = $_POST['nama'];
$jumlah = $_POST['jumlah'];

$sql="INSERT INTO data_barang (kode_barang, nama, jumlah) 
	 VALUES ('".$kode_barang."','".$nama."','".$jumlah."')";
$a=$koneksi->query($sql);
			if($a == true){
			// 	header('location: formlogin.php');
?>
<script language="JavaScript">
        alert('Input data barang berhasil!');
        document.location='input_data_barang.php';
    </script>
<?php 			 }else {
				echo "eroooorrrr";
			}
 ?>