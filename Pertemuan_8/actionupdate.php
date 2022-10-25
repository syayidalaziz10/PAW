<?php 
$koneksi = mysqli_connect("localhost","root","","db_008");
$id = $_POST['id_aziz'];
$nama =$_POST['nama_aziz'];
$alamat =$_POST['alamat_aziz'];

$sql = "UPDATE tbl_aziz SET nama_aziz = '$nama',alamat_aziz='$alamat' WHERE id_aziz=$id ";
$update =mysqli_query($koneksi, $sql);

if (!$update){
    echo "Data gagal diupdate!";
}
else {
    header("location: table.php");
}
?>