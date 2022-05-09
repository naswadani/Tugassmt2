<?php 
require 'koneksi2.php';
$submit= query("SELECT * FROM tbpemesanan");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/d2343b7158.js" crossorigin="anonymous"></script>
	<title>Tabel Pemesanan</title>
	<style>
		h2{
			color : #24262b;
		}
		body{
			margin: 7em;
    		padding: 0px;
    		background-color: #F7F7F7;
		}
		button{
			margin-top : 20px;
			overflow: hidden;
			list-style-type: none;
			background-color:#86C6F4;
			border : none;
			border-radius:5px;
		}
		button a{
			text-decoration: none;
			color : #24262b;
			font-size:20px;
		}
	</style>
</head>
<body>
	<h2>Tabel Pemesanan</h2>
	<table border="1" cellpadding="20" cellspacing="0">
		<tr style="background-color: #86C6F4;">
			<th>no</th>
			<th>nama</th>
			<th>pesanan</th>
            <th>no telepon</th>
            <th>alamat</th>
			<th>waktu</th>
			<th>pembayaran</th>
			<th>edit</th>
		</tr>
		<?php $i=1;?>
		<?php foreach($submit as $row):?>
		<tr style="background-color:white;"> 
			<td><?= $i; ?></td>
			<td><?= $row["nama_pemesan"];?></td>
			<td><?= $row["tipe_pesanan"];?></td>
			<td><?= $row["notelp"];?></td>
			<td><?= $row["alamat"];?></td>
			<td><?= $row["waktu"];?></td>
			<td><?= $row["pembayaran"];?></td>
			<td>
				<a href="ubah2.php?id=<?= $row["id"];?>"><i class="fa-solid fa-pen-to-square fa-2x"></i></a>
				<br>
				<br>
				<a href="hapus2.php?id=<?= $row["id"];?>"><i class="fa-solid fa-trash-can fa-2x"></i></a>
			</td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
	<button><a href="form.php">Kembali</a></button>

</body>
</html>