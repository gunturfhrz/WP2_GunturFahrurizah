<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data Nilai Mahasiswa</title>
	<style>
        table {
            width: 80%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 2px;
            text-align: center;
        }
        th {
            background-color: #F5DEB3;
        }
    </style>
</head>
<body>
	<a href="<?=base_url('formnilai'); ?> ">Input Kembali</a>
	<h1 align="center">Tampil Data Nilai Mahasiswa</h1>
	<table border="1" cellpadding="2" cellpadding="2" align="center">
    <tr>
			<th rowspan="2">NIM MAHASISWA</th>
			<th rowspan="2">NAMA MAHASISWA</th>
			<th rowspan="2">KELAS</th>
			<th rowspan="2">MATAKULIAH</th>
			<th rowspan="2">SKS</th>
			<th colspan="4">NILAI</th>
			<th rowspan="2">TOTAL</th>
			<th rowspan="2">GRADE</th>
			<th rowspan="2">KETERANGAN</th>
		</tr>
		<tr>
			<th>NILAI ABSENSI</th>
			<th>NILAI TUGAS</th>
			<th>NILAI UTS</th>
			<th>NILAI UAS</th>
		</tr>
		<tr>
			<td align="center"><?=$nim; ?></td>
			<td align="center"><?=$nama; ?></td>
			<td align="center"><?=$kelas; ?></td>
			<td align="center"><?=$matakuliah; ?></td>
			<td align="center"><?=$sks; ?></td>
			<td align="center"><?=$absen; ?></td>
			<td align="center"><?=$tugas; ?></td>
			<td align='center'><?=$uts; ?></td>
			<td align="center"><?=$uas; ?></td>
			<td align="center"><?=$total; ?></td>
			<td align="center"><?=$grade; ?></td>
			<td align="center"><?=$keterangan; ?></td>

		</tr>

    </table>
</body>
</html>