<?php 
$koneksi = mysqli_connect("localhost","root","","datamhs");

if ($koneksi) {
    echo "berhasil connect";
}
else {
    echo "gagal connect";
}


?>