<!DOCTYPE html>
<html>
<head>
	<title>Form Login</title>
</head>
<body>
	<p>register : <a href="register.php">here</a></p>
	<form action="act_login.php?op=in" method="POST">
		<table>
			<tr>
				<td>Username :</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>

</body>
</html>