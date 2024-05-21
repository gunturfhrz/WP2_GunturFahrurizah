<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Tampil Data Mahasiswa</title>
</head>
<body>
<center>
		<tr>
			<td colspan="4" align="center"> Form Tampil Data Mahasiswa</td>
		</tr>
	<table border="2" style="border-collapse: collapse; width:50%;">
		
		<tr style="background: gray;">
			<td> Nim Mahasiswa</td>
			<td> Nama Mahasiswa</td>
			<td> Kelas</td>
			<td> Keterangan</td>
		</tr>
		   <?php foreach ($mahasiswa as $mhs) { ?>
                <tr>
                    <td><?php echo $mhs->nim; ?></td>
                    <td><?php echo $mhs->nama; ?></td>
                    <td><?php echo $mhs->kelas; ?></td>
                    <td><a href="<?= base_url('mahasiswa/editdata/'.$mhs->nim); ?> ">Edit</a> || 
                    	<a href="<?= base_url('mahasiswa/do_delete/'.$mhs->nim); ?>">Hapus</a></td>
                </tr>
            <?php } ?>
	</table>
	<a href="<?= base_url('mahasiswa/tambah') ?>"> Tambah Siswa baru</a>
</center>
</body>
</html>