<!DOCTYPE html>
<html>
<head>
	<title>insert data</title>
</head>
<body>
	<form action="aksi.php" method="POST">
		<h1>REGISTER</h1>
		<table>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username" required=""></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" required=""></td>
			</tr>
			<tr>
				<td>Ulangi Password :</td>
				<td><input type="password" name="password" required=""></td>
			</tr>
			<tr>
				<td>Nama Lengkap :</td>
				<td><input type="text" name="namalengkap" required=""></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><textarea name="email" required=""></textarea></td>
			</tr>
			<tr>
				<td>Level :</td>
				<td>
					<select name="level">
						<option value="Admin"> Admin</option>
						<option value="Pengguna"> Pengguna</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="submit" value="SAVE"></td>
				<td><input type="reset" name="CANCEL"></td>
			</tr>
		</table>
	</form>
</body>
</html>