<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Detail Barang</title>
</head>
<body>
	<table cellpadding="3">
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><?= $barang ?></td>
		</tr>
		<tr>
			<td>Total Harga</td>
			<td>:</td>
			<td>Rp. <?= number_format($total->price, 0, '.', '.') ?></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td>
			<td>:</td>
			<td><?= $total->quantity ?></td>
		</tr>
	</table>
</body>
</html>
