<html>
	<head>
		<title>Form Lihat MHS</title>
	</head>
	<body>
		<p align="center">Form Lihat MHS</p>
		<table border="1" cellpadding="5" cellspacing="0" align="center">
			<tr align="center">
				<td>NPM</td>
				<td>Nama</td>
				<td>Aksi</td>
			</tr>
			<?php while($row = $this->mm->fetch($data)){
				echo "
					<tr>
						<td>".$row["npm"]."</td>
						<td>".$row["nama"]."</td>
						<td><a href='main_mhs.php?hapus=ok&npm=".$row["npm"]."' onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
					</tr>
				";
			}?>
		</table>
		<br>
		<center><a href='main_mhs.php?tambah=ok'>Tambah Data</a></center>
	</body>
</html>