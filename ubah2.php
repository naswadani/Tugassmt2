<?php
require 'koneksi2.php';
//ambil data
$id = $_GET["id"];
//query data
$data = query("SELECT * FROM tbpemesanan WHERE id = $id")[0];


if(isset($_POST["input"]) ){
    //cek data 
    if(input($_POST)>0){
      echo "
      <script>
        alert('data berhasil diubah');
        document.location.href = 'tbpemesanan.php';
      </script>
      ";
    }else{
      echo "
      <script>
        alert('data gagal diubah');
      </script>
      ";
    }
}
?>

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
       <h1>Update Here</h1>
    <form method="post">
        <input type="hidden" name="id" value="<?= $data["id"];?>">
        <table>
        <tr><td><label>Nama Pemesan</label></td><td><input type="text" name="nama_pemesan" size="50"  required value="<?= $data["nama_pemesan"];?>"></td></tr>

        <tr><td><label>Tipe Pesanan</label></td><td><input type="text" name="tipe_pesanan" size="50" required value="<?= $data["tipe_pesanan"];?>" ></td></tr>

        <tr><td><label>No Telepon</label></td><td><input type="number" name="notelp" size="50" required value="<?= $data["notelp"];?>"></td></tr>

        <tr><td><label>Alamat</label></td><td><input type="text" name="alamat" size="50" cols="20" required value="<?= $data["alamat"];?>"></td></tr>

        <tr><td><label>Waktu Service</label></td><td><input type="datetime-local" name="waktu" size="50" required value="<?= $data["waktu"];?>"></td></tr>

        <tr><td>Pembayaran :</td><td>
            <select id="pembayaran" name="pembayaran" value="<?= $data["pembayaran"];?>">
                <option>Pilih</optione>
                <option value="Transfer">Transfer via Bank</option>
                <option value="Bayar Ditempat">Bayar Ditempat</optione>
            </select></td></tr>  
        </table>
        <button type="submit" name="input">Update</button>
    </form>      
   </div>
</body>
</html>