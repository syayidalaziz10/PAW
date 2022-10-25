<?php 
$koneksi = mysqli_connect("localhost","root","","db_008");
$nama = $_POST['nama_aziz'];
$alamat = $_POST['alamat_aziz'];
$sql = "INSERT INTO tbl_aziz VALUES(null,'$nama','$alamat')";
$tambah = mysqli_query($koneksi, $sql);

if (!$tambah){
    echo "Data gagal dihapus!";
}
else {
    header("location: table.php");
}
?>