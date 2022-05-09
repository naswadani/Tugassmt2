<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pemesanan.css">
    <script src="https://kit.fontawesome.com/d2343b7158.js" crossorigin="anonymous"></script>
    <title>Pemesanan</title>
</head>
<body>
   <nav>
       <div class="header">
           <div class="logo"></div>
           <div class="menu">
               <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">Pemesanan</a></li>
                    <li style="float:right;"><a href="tblogin.php">Database Login</a></li>
               </ul>
       </div>
   </nav>
   <div class="booking">
    <form action="tbpemesanan.php" method="post">
        <table>
        <tr><td><label>Nama Pemesan</label></td><td><input type="text" name="nama" size="50"  required></td></tr>
        <tr><td><label>Tipe Pesanan</label></td><td><input type="text" name="pesanan" size="50" required></td></tr>
        <tr><td><label>No Telepon</label></td><td><input type="number" name="notelp" size="50" required></td></tr>
        <tr><td><label>Alamat</label></td><td><input type="text" name="alamat" size="50" cols="20" required></td></tr>
        <tr><td><label>Waktu Service</label></td><td><input type="datetime-local" name="waktu" size="50" required></td></tr>
        <tr><td>Pembayaran :</td><td>
            <select id="pembayaran" name="pembayaran">
                <option>Pilih</optione>
                <option value="Transfer">Transfer via Bank</option>
                <option value="Bayar Ditempat">Bayar Ditempat</optione>
            </select></td></tr>  
        </table>
        <button type="submit" name="input" value="Pesan">Pesan</button>
    </form>      
   </div>
</body>
</html>