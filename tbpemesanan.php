<?php 
if (!isset($_POST["nama"])){
	header("Location:form.php");
	exit;
} 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tabel login</title>
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
			<th>nama</th>
			<th>pesanan</th>
            <th>no telepon</th>
            <th>alamat</th>
			<th>waktu</th>
			<th>pembayaran</th>

		</tr>
		<tr style="background-color:white;"> 
			<th><?php echo $_POST["nama"]; ?></th>
			<th><?php echo $_POST["pesanan"]; ?></th>
			<th><?php echo $_POST["notelp"]; ?></th>
			<th><?php echo $_POST["alamat"]; ?></th>
			<th><?php echo $_POST["waktu"]; ?></th>
			<th><?php echo $_POST["pembayaran"]; ?></th>			
		</tr>
	</table>
	<button><a href="form.php">Kembali</a></button>

</body>
</html>