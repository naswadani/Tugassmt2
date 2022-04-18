<?php
require 'koneksi.php';
$submit= query("SELECT * FROM tblogin");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mencoba</title>
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
	<h2>Daftar Login</h2>
	<table border="1" cellpadding="20" cellspacing="0">
		<tr style="background-color: #86C6F4;">
			<th>no</th>
			<th>username</th>
			<th>password</th>
		</tr>
		<?php $i=1;?>
		<?php foreach($submit as $row):?>
		<tr style="background-color:#F7F7F7;">
			<td><?= $i; ?></td>
			<td><?= $row["username"];?></td>
			<td><?= $row["password"];?></td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</table>
	<button><a href="login.php">Kembali</a></button>

</body>
</html>