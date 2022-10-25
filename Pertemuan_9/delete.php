<?php
$connect = mysqli_connect("localhost","root","","alaziz");
$id = $_GET['id'];
$sql_hapus = "DELETE FROM penjualan WHERE id_penjualan=$id";
$hapus = mysqli_query($connect,$sql_hapus);

if ($hapus){
    header("location: index.php");
}
else {
    echo "Delete Data Gagal";
}
?>