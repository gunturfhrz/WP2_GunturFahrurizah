<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Input Mahasiswa </title>
</head>
<body>
	<center>
		<form action="<?= base_url('mahasiswa/updatedata'); ?>" method="post">	
			<table border="2">
				<tr> 
					<td colspan="3" align="center">Form Input Mahasiswa</td>
				</tr>
				<?php foreach ($mahasiswa as $mhs) { ?>
				<tr> 
					<td> Masukan Nim Mahasiswa</td>
					<td> : </td>
					<td> <input type="text" name="nim" value="<?php echo $mhs->nim; ?>" readonly> </td>
				</tr>
					<tr> 
					<td> Masukan Nama Mahasiswa</td>
					<td> : </td>
					<td> <input type="text" name="nama" value="<?php echo $mhs->nama;?>"> </td>
				</tr>
					<tr> 
					<td> Masukan kelas Mahasiswa</td>
					<td> : </td>
					<td> <input type="text" name="kelas" value="<?php echo $mhs->kelas; ?>"> </td>
				</tr>
				<?php } ?>
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