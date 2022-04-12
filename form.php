<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <script src="https://kit.fontawesome.com/d2343b7158.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
   <nav>
       <div class="header">
           <div class="logo"></div>
           <div class="menu">
               <ul>
                    <li><a href="home.html">Home</a></li>
                    <li><a href="#">Pemesanan</a></li>
               </ul>
               <div class="search-box">
                   <input class="search-txt" type="search" name="" placeholder="Search" >
               </div>
               <a class="search-icon" href="#">
                <i class="fas fa-search"></i>
               </a>
           </div>
       </div>
   </nav>
   <div class="booking" name="belanja" method="post">
    <form>
        <table>
        <tr><td><label>Nama Pemesan</label></td><td><input type="text" name="nama" size="50"></td></tr>
        <tr><td><label>Tipe Pesanan</label></td><td><input type="text" name="pesanan" size="50"></td></tr>
        <tr><td><label>No Telepon</label></td><td><input type="number" name="notelp" size="50"></td></tr>
        <tr><td><label>Alamat</label></td><td><input type="text" name="alamat" size="50" cols="20"></td></tr>
        <tr><td><label>Waktu Service</label></td><td><input type="time" name="waktu" size="50"></td></tr>
        <tr><td><label>Paket</label></td><td><input type="text" name="paket" size="50"></td></tr>
        <tr><td>Pembayaran :</td><td>
            <select id="pembayaran" name="pembayaran">
                <option>Pilih</optione>
                <option value="Transfer">Transfer via Bank</option>
                <option value="Bayar Ditempat">Bayar Ditempat</optione>
            </select></td></tr>  
    </table>
        <li class="submit"><input type="submit" name="input" value="SUBMIT" align="right" style="font-size: 40px; text-decoration: none; border: none; cursor: pointer;"></li>
    </form>      
   </div>
</body>
</html>
