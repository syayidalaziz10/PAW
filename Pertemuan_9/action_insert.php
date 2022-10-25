<?php 
$koneksi = mysqli_connect("localhost","root","","alaziz");
$barang = $_POST['nama_barang'];
$qty = $_POST['qty'];
$harga = $_POST['harga_satuan'];
$sql = "INSERT INTO penjualan VALUES(null,'$barang','$qty','$harga')";
$tambah = mysqli_query($koneksi, $sql);

if (!$tambah){
    echo "Data gagal dihapus!";
}
else {
    header("location: index.php");
}
?>