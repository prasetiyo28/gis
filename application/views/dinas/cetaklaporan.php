<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body onload="window.print()">
	<center>
		<h1>Data Industri Meubel Kab.Tegal Tahun 2019</h1>
		<h2>Dinas Perindustrian dan Perdagangan Kabupaten Tegal</h2>
		<table border="1" style="border-collapse: collapse;">
			<tr>
				<th>Nama</th>
				<th>Nama Pemilik</th>
				<th>Alamat</th>
				<!-- <th>Izin Usaha</th> -->
				<th>Jumlah Karyawan</th>
				<!-- <th>Gaji Karyawan</th> -->
				<!-- <th>Penghasilan/pendapatan per bulan</th> -->
				<th>Kategori</th>
			</tr>
			<?php foreach ($industri as $i): ?>


				<tr>
					<td><?php echo $i->name ?></td>
					<td><?php echo $i->owner ?></td>
					<td><?php echo $i->address ?></td>
					<td><?php echo $i->karyawan ?></td>
					<td><?php echo $i->kategori ?></td>
				</tr>

			<?php endforeach ?>
		</table>


	</center>

	<div style="float: right; margin-right: 100px" >

		<p>Tegal , 28 July 2019</p><br><br><br>
		<p>DISPERINDAG 
			<br>
			<br>
			<br>
			<br>
			<br>

			<?php echo $dinas->name; ?>
		</p>

	</div>
</body>
</html>