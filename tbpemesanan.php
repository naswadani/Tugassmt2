<?php
require 'koneksifrom.php';
$submit= query("SELECT * FROM tbpemesanan");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mencoba</title>
	<style>
		h2{
			color : white;
		}
		body{
			margin: 7em;
    		padding: 0px;
    		background-color: #3A3845;
		}
		button{
			margin-top : 20px;
			overflow: hidden;
			list-style-type: none;
			background-color:black;
		}
		button a{
			text-decoration: none;
			color : white;
			font-size:20px;
		}
	</style>
</head>
<body>
	<h2>Daftar Login</h2>
	<table border="1" cellpadding="20" cellspacing="0">
		<tr style="background-color: #FF6363;">
			<th>no</th>
			<th>nama</th>
			<th>pesanan</th>
            <th>no telepon</th>
            <th>alamat</th>

		</tr>
		<?php $i=1;?>
		<?php foreach($submit as $row):?>
		<tr style="background-color:#DDDDDD;">
			<td><?= $i; ?></td>
			<td><?= $row["nama"];?></td>
			<td><?= $row["pesanan"];?></td>
            <td><?= $row["notelp"];?></td>
            <td><?= $row["alamat"];?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
	<button><a href="login.php">Kembali</a></button>

</body>
</html>