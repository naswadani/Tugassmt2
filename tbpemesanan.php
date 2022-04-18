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
	<h2>Tabel Pemesanan</h2>
	<table border="1" cellpadding="20" cellspacing="0">
		<tr style="background-color: #FF6363;">
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