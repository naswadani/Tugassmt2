<?php
require 'koneksi2.php';

    $id = $_GET["id"];

    if(delete($id)>0){
    echo "
        <script>
          alert('data berhasil dihapus');
          document.location.href = 'tbpemesanan.php';
        </script>
    ";
}else{
    echo "
        <script>
            alert('data berhasil dihapus');
            document.location.href = 'tbpemesanan.php';
        </script>
    ";
}
?>