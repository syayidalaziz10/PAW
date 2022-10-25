<?php 
$connect = mysqli_connect("localhost","root","","alaziz");
$sql = "SELECT * FROM penjualan";
$hasil = mysqli_query($connect,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <div class="container mt-3">
        <h3>TABEL PENJUALAN</h3>
        <a href="insert.php" class="btn btn-sm btn-primary mt-3">Tambah</a>
        <table class="table table-bordered mt-3">
            <thead>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>QTY</th>
                <th>Harga Satuan</th>
                <th>Sub Total</th>
                <th>Action</th>
            </thead>
            <tbody>
                <?php while ($row=mysqli_fetch_assoc($hasil)){?>
                <tr>
                    <td><?=$row['id_penjualan']?></td>
                    <td><?=$row['nama_barang']?></td>
                    <td><?=$row['qty']?></td>
                    <td><?=$row['harga_satuan']?></td>
                    <td><?=$row['qty']*$row['harga_satuan']?></td>
                    <td>
                        <a href="update.php? id=<?php echo $row['id_penjualan'];?>" class="btn btn-sm btn-success ">Edit</a>
                        <a href="delete.php? id=<?php echo $row['id_penjualan'];?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a>
                    </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>