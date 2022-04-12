<h3>Barang</h3>

<form action="" method="post">
    <table>
        <tr>
            <td width="130">Jenis Pesanan</td>
            <td><input type="text" name="jenis_pesanan"></td>
        </tr>
        <tr>
            <td>tanggal</td>
            <td><input type="date" name="tanggal"></td>
        </tr>
        <tr>
            <td>paket</td>
            <td><input type="text" name="paket"></td>
        </tr>
        <tr>
            <td>nama</td>
            <td><input type="text" name="nama_Pemesan"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat_Pemesan"></td>
        </tr>
        <tr>
            <td>metode</td>
            <td><input type="text" name="metode"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="simpan" name="proses"></td>
        </tr>
    </table>
</form>
<?php
include "koneksibrg.php";
if(isset($_POST['proses'])){
    mysqli_query($koneksi,"insert into tbpemesanan set
    jenis_pesanan = '$_POST[jenis_pesanan]',
    tanggal = '$_POST[tanggal]',
    paket = '$_POST[paket]',
    nama_Pemesan = '$_POST[nama_Pemesan]',
    alamat_Pemesan = '$_POST[alamat_Pemesan]',
    metode_Pembayaran = '$_POST[metode]'");
}
  ?>