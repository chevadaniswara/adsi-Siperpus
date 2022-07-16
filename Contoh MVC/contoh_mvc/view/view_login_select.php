<html>
	<head>
		<title>Form Lihat LOGIN</title>
	</head>
	<body>
		<p align="center">Form Lihat LOGIN</p>
		<table border="1" cellpadding="5" cellspacing="0" align="center">
			<tr align="center">
				<td>User</td>
				<td>Password</td>
				<td>Aksi</td>
			</tr>
			<?php while($row = $this->ml->fetch($data)){
				echo "
					<tr>
						<td>".$row["user"]."</td>
						<td>".$row["password"]."</td>
						<td><a href='main_login.php?hapus=ok&user=".$row["user"]."' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
					</tr>
				";
			}?>
		</table>
		<br>
		<center><a href='main_login.php?tambah=ok'>Tambah Data</a></center>
	</body>
</html>