<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylehome.css">
    <script src="https://kit.fontawesome.com/d2343b7158.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <nav>
        <div class="header">
            <div class="logo"></div>
            <div class="menu">
                <ul>
                     <li><a href="index.php">Home</a></li>
                     <li><a href="form.php">Pemesanan</a></li>
                     <li style="float:right;"><a href="tblogin.php">Database Login</a></li>
                </ul>  
        </div>
    </nav>
    <div class="wrapper">
        <div class="contents">
            <div class="contents-left">
                <h1>Bengkelno</h1>
                <p>Bengkelno merupakan penyedia jasa perbaikan, menggunakan tenaga kerja yang sudah terlatih menjamin keamanan barang anda. Jaminan uang kembali 100% jika barang yang diservis menggalami kerusakan maksimal 20 hari. </p>
                <br>
                <a href="#popup">YUK ORDER</a>
            </div>
            <div class="contents-right">
              <img src="img/tools.jpg" alt="peralatan" style="width: 100%;">
            </div>
        </div>
    </div>
    <div class="features">
      <div class="wrapper">
        <div class="feature">
         <a href="form.php" class="fa-solid fa-wrench fa-7x"></a>
            <center><h2 style="font-size: 20px; color:#86C6F4;">Elektronik</h2></center>
          </i>
        </div>
        <div class="feature">
        <a href="form.php" class="fa-solid fa-car fa-7x"></a>
            <center><h2 style="font-size: 20px; color:#86C6F4;">Mobil</h2></center>
          </i>
        </div>
        <div class="feature">
        <a href="form.php" class="fa-solid fa-motorcycle fa-7x"></a>
            <center><h2 style="font-size: 20px; color:#86C6F4;">Motor</h2></center>
          </i>
        </div>
        <div class="feature">
        <a href="form.php" class="fa-solid fa-hammer fa-7x"></a>
            <center><h2 style="font-size: 20px; color:#86C6F4;">Rumah</h2></center>
          </i>
        </div>
      </div>
    </div>
    <div class="popup" id="popup">
      <div class="popup_content">
          <div class="popup_img">
            <img src="img/electronic.jpg" alt="electronic">
            <img src="img/car.jpg" alt="car">
            <img src="img/motorcycle.jpg" alt="motorcycle">
            <img src="img/house.jpg" alt="house">
            <a href="#" class="popup_close">&times;</a>
          </div>
          <div class="popup_header">
            <h1>Start booking now!</h1>
            <h2>Please read these terms before booking</h2>
          </div>
            <div class="popup_text">
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia minima nobis laudantium voluptates harum quidem cum aliquid eligendi vel ipsa, amet iure natus reprehenderit soluta fuga molestias mollitia excepturi illum.</p>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet voluptas sapiente hic repellat nobis placeat, quas est, exercitationem ullam ipsa dignissimos eum molestias omnis inventore maxime commodi quidem! Nesciunt, odit?</p>
            </div>
            <center><a href="form.php" class="popup_btn">BOOK NOW</a></center>  
      </div>
    </div>
    <i style="color:#2f3640;">@Bengkelno2022-Naswa Bryna Danikhansa</i>
</body>
</html>