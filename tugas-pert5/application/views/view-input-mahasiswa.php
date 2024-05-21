<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input Mahasiswa </title>
</head>
<body>
	<center>
		<form action="<?= base_url('Mahasiswa/tambahaksi'); ?>" method="post">	
			<table border="2">
				<tr> 
				<td colspan="3" align="center">Form Input Mahasiswa</td>
				</tr>

				<tr> 
					<td> Masukan Nim Mahasiswa</td>
					<td> : </td>
				<td> <input type="text" name="nim" placeholder="Nim Mahasiswa"> </td>
				</tr>
					<tr> 
					<td> Masukan Nama Mahasiswa</td>
					<td> : </td>
					<td> <input type="text" name="nama" placeholder="Nama Mahasiswa"> </td>
				</tr>
					<tr> 
					<td> Masukan kelas Mahasiswa</td>
					<td> : </td>
					<td> <input type="text" name="kelas" placeholder="Kelas Mahasiswa"> </td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" name="btnsubmit" value="SIMPAN">
					</td>
				</tr>
			</table>
		</form>
	</center>

</body>
</html>