<?php 
include "testdatabase.php";

$nama =$_POST['id_prodi'];
$prodi =$_POST['nama_mhs'];
$alamat =$_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES(null,'$nama','$prodi','$alamat')";
$hasil =mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "Data gagal ditambahkan!";
}
else {
    echo "Data berhasil ditambahkan <br>
    <a href='tabledatabase.php'>show data</a>
    ";
}

?>