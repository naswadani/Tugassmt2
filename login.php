<?php
require 'koneksi.php';
if(isset($_POST["login"]) ){
    //cek data 
    if(tambah($_POST)>0){
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
    <link rel="stylesheet" href="stylelog.css">
    <script src="https://kit.fontawesome.com/d2343b7158.js" crossorigin="anonymous"></script>
    <title>Login</title>
</head>
<body>
   <nav>
       <div class="header">
           <div class="logo"></div>
           <div class="menu">
               <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Pemesanan</a></li>
                    <li style="float:right;"><a href="tblogin.php">Database Login</a></li>
               </ul>
       </div>
   </nav>
   <div class="login-box">
       <h1>Login Here</h1>
       <form action="" method="post">
        <table>
            <tr><td>Username</td><td><input type="email" name="username" placeholder="username" id="username" required></td></tr>
            <tr><td>Password</td><td><input type="password" name="password" placeholder="password" id="password" required></td></tr>
        </table>
        <button type="submit" name="login" style="font-size: 25px">Login</button>
    </form>
</div>
   </div>
   <footer class="footer">
    <div class="container2">
      <div class="row2">
        <div class="footer-col">
          <h1 style="color: #24262b; font-size: 45px; margin-left: 30px;">Bengkelno</h1>
          <h3 style="color: #24262b; margin-left: 40px;font-size: 15px;"> Bengkel Online</h3>
        </div>
        <div class="footer-col">
          <h4><b>help</b> </h4>
          <ul>
            <li><a href="#"><b>FAQ</b></a></li>
            <li><a href="#"><b>returns</b></a></li>
            <li><a href="#"><b>payment options</b></a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4><b>follow us</b></h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/daninaswa/"><i class="fab fa-instagram"></i></a>
            <a href="https://github.com/naswadani"><i class="fab fa-github"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
</html>