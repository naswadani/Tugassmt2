<?php
$pemesanan = mysqli_connect("localhost","root","","submit");

function query($query){
    global $pemesanan;
    $result = mysqli_query($pemesanan, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
      $rows[] = $row;
    }
    return $rows;
}
function input($data){
    global $pemesanan; 
    $nama_pemesan = htmlspecialchars($data["nama_pemesan"]);
    $tipe_pesanan = htmlspecialchars($data["tipe_pesanan"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kecamatan = htmlspecialchars($data["kecamatan"]);
    $kota = htmlspecialchars($data["kota"]);
    $waktu = htmlspecialchars($data["waktu"]);
    $pembayaran = htmlspecialchars($data["pembayaran"]);
  
    $query = "INSERT INTO tbpemesanan
                VALUES
                ('','$nama_pemesan','$tipe_pesanan','$notelp','$alamat','$kecamatan','$kota','$waktu','$pembayaran')";
      mysqli_query($pemesanan,$query);
      return mysqli_affected_rows($pemesanan);
}
function delete($id){
    global $pemesanan;
    mysqli_query($pemesanan, "DELETE FROM tbpemesanan WHERE id = $id");
    return mysqli_affected_rows($pemesanan);
}
function update($data){
    global $pemesanan;
    $id = $data["id"];
    $nama_pemesan = htmlspecialchars($data["nama_pemesan"]);
    $tipe_pesanan = htmlspecialchars($data["tipe_pesanan"]);
    $notelp = htmlspecialchars($data["notelp"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $kecamatan = htmlspecialchars($data["kecamatan"]);
    $kota = htmlspecialchars($data["kota"]);
    $waktu = htmlspecialchars($data["waktu"]);
    $pembayaran = htmlspecialchars($data["pembayaran"]);

    $query = "UPDATE tbpemesanan SET
                nama_pemesana = '$nama_pemesan',
                tipe_pesanan = '$tipe_pesanan',
                notelp = '$notelp',
                alamat = '$alamat',
                kecamatan = '$kecamatan',
                kota = '$kota',
                waktu = '$waktu',
                pembayaran = '$pembayaran'
                WHERE id = $id
            ";
        mysqli_query($pemesanan,$query);
        return mysqli_affected_rows($pemesanan);
}
?>