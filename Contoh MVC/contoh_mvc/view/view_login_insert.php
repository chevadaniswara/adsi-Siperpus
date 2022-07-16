<html>
	<head>
		<title>Form Tambah LOGIN</title>
	</head>
	<body>
		<p align="center">Form Tambah LOGIN</p>
		<form action="" method="POST">
			<table border="1" cellpadding="5" cellspacing="0" align="center">
				<tr>
					<td>User</td>
					<td>:</td>
					<td><input type="text" name="user" size="30" /></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="text" name="pass" size="10"/></td>
				</tr>
				<tr align="center">
					<td colspan="3"><input type="submit" name="kirim"/></td>
				</tr>
			</table>
		</form>
	</body>
</html>
<?php
	if(isset($_POST["kirim"])){ //jika button kirim diklik maka akan memamnggil fungsi insert pada class controller_login cl2
		$cl2 = new controller_login();
		$cl2->insert();
	}
?>