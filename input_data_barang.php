<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
</head>
<body>
	<form action="input.php" method="POST">
		<h1>INPUT DATA BARANG</h1>
		<a href="pembelian.php">Tambah Stok Barang</a>
		<table>
			<tr>
				<td>Kode Barang :</td>
				<td><input type="text" name="kode_barang" required=""></td>
			</tr>
			<tr>
				<td>Nama Barang :</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr>
				<td>Jumlah Barang :</td>
				<td><input type="text" name="jumlah" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" value="SAVE"></td>
				<td><input type="reset" name="CANCEL"></td>
			</tr>
		</table>
	</form>
</body>
</html>