<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
	<style>
        table {
            border-collapse: collapse;
        }
        table, th {
            border: 1px solid black;
            padding: 2px;
            text-align: left;
        }
        th , td {
            background-color: #F5DEB3;
        }
    </style>
</head>
<body>
    <form action="<?=base_url('formnilai/cetak'); ?>" method="post"> 
        <h1 align="center">Form Nilai Mahasiswa </h1>
		<table border="1" cellpadding="2" cellspacing="2" align="center">	
        
        <tr>
            <td>NIM MAHASISWA</td>
            <th>:</th>
            <th><input type="text" name="nim"</th>
        </tr>

        <tr>
            <td>NAMA MAHASISWA</td>
            <th>:</th>
            <th><input type="text" name="nama"</th>
        </tr>

        <tr>
            <td>KELAS MAHASISWA</td>
            <th>:</th>
            <th><input type="text" name="kelas"</th>
        </tr>

        <tr>
            <td>MATAKULIAH</td>
            <th>:</th>
            <th><input type="text" name="matakuliah"</th>
        </tr>

        <tr>
				<td>JUMLAH SKS</td>
				<th> : </th>
				<th> <select name="sks" value="sks" style="background-color: #AFEEEE;">
						<option value="">Silahkan Pilih SKS</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
					</select>
				</th>
			</tr>
			
			<tr>
				<td>NILAI ABSENSI</td>
				<td>:</td>
				<td><input type="absen" name="absen"></td>
			</tr>

			<tr>
				<td>NILAI TUGAS</td>
				<td>:</td>
				<td><input type="tugas" name="tugas"></td>
			</tr>

			<tr>
				<td>NILAI UTS</td>
				<td> : </td>
				<td><input type="uts" name="uts"></td>
			</tr>

			<tr>
				<td>NILAI UAS</td>
				<td> : </td>
				<td><input type="uas" name="uas"> </td>
			</tr>

			<tr>
				<td colspan="3" align="center"><input type="submit" name="btnsubmit" style="background-color: #90EE90;"></td>
			</tr>
			
		</table>


    </form>
</body>
</html>