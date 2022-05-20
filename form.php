<?php
require 'koneksi2.php';
if(isset($_POST["input"]) ){
    //cek data 
    if(input($_POST)>0){
      echo "
      <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index.php';
      </script>
      ";
    }else{
      echo "
      <script>
        alert('data gagal ditambahkan');
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
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
                    <li style="float:right;"><a href="tbpemesanan.php">Database Pesanan</a></li>
               </ul>
       </div>
   </nav>
   <div class="booking">
    <form action="" method="post">
        <table>
        <tr><td><label>Nama Pemesan</label></td><td>
        <div class="form-group">
            <input type="text" class="form-control" id="formGroupExampleInput" name="nama_pemesan" placeholder="Nama Pemesan" required>
          </div>
        </td></tr>

        <tr><td><label>Tipe Pesanan</label></td><td>
        <select class="form-control form-control-sm" id="tipe_pesanan" name="tipe_pesanan">
              <option>Pilih Jasa Perbaikan</option>
              <option value="Mobil">Mobil</option>
              <option value="Motor">Motor</option>
              <option value="Rumah">Rumah</option>
              <option value="Elektronik">Perabotan Elektronik</option>
          </select>
        </td></tr>

        <tr><td><label>No Telepon</label></td><td>
          <div class="form-group">
            <input type="number" class="form-control" id="formGroupExampleInput" name="notelp" placeholder="Nomer Telepon" required>
          </div>
        </td></tr>

        <tr><td><label>Alamat</label></td><td>
          <div class="form-row">
            <div class="col-7">
              <input type="text" name="alamat" class="form-control" placeholder="Alamat" required>
            </div>
            <div class="col">
              <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan">
            </div>
            <div class="col">
              <input type="text" name="kota" class="form-control" placeholder="Kota">
            </div>
          </div>
        </td></tr>
        <tr><td><label>Waktu Service</label></td><td><input type="datetime-local" name="waktu" size="50" style ="border:none; font-size:15px;" required></td></tr>

        <tr><td>Pembayaran</td><td>
          <select class="form-control form-control-sm" id="pembayaran" name="pembayaran">
              <option>PILIHAN PEMBAYARAN</option>
              <option value="Transfer">Transfer via Bank</option>
              <option value="Bayar Ditempat">Bayar Ditempat</optione>
          </select>
        </table>
        <button type="submit" name="input">Pesan</button>
    </form>      
   </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
</html>