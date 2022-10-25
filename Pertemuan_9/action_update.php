<?php 
$koneksi = mysqli_connect("localhost","root","","alaziz");
$id = $_POST['id_penjualan'];
$barang =$_POST['nama_barang'];
$qty =$_POST['qty'];
$harga =$_POST['harga_satuan'];

$sql = "UPDATE penjualan SET nama_barang = '$barang', qty='$qty', harga_satuan='$harga' WHERE id_penjualan=$id ";
$update =mysqli_query($koneksi, $sql);

if (!$update){
    echo "Data gagal diupdate!";
}
else {
    header("location: index.php");
}
?>