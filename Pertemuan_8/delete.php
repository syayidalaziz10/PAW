<?php
$connect = mysqli_connect("localhost","root","","db_008");
$id = $_GET['id'];
$sql_hapus = "DELETE FROM tbl_aziz WHERE id_aziz=$id";
$hapus = mysqli_query($connect,$sql_hapus);

if ($hapus){
    header("location: table.php");
}
else {
    echo "Delete Data Gagal";
}
?>