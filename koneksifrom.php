<?php 
$database = mysqli_connect("localhost","root","","pembayaran");
function query($query){
  global $database;
  $result = mysqli_query($database, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row;
  }
  return $rows;
}
function beli($pesan){
  global $database; 
  $nama = htmlspecialchars($data["nama"]);
  $pesanan = htmlspecialchars($data["pesanan"]);
  $notelp = htmlspecialchars($data["notelp"]);
  $alamat = htmlspecialchars($data["alamat"]);

  $query = "INSERT INTO tbpemesanan
              VALUES
              ('','$nama','$pesanan','$notelp','$alamat')";
    mysqli_query($database,$query);
    return mysqli_affected_rows($database);
}






?>