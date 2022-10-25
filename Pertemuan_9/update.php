<?php 
$koneksi = mysqli_connect("localhost","root","","alaziz");
$id = $_GET['id'];
$sql ="SELECT *FROM penjualan WHERE id_penjualan=$id";

$update= mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        while ($row=mysqli_fetch_assoc($update)){ ?>
        <div class="container mt-3">
            <div class="row text-center">
                <div class="col">
                    <h2>Update Data Mahasiswa</h2>
                </div>
            </div>
            <form method="POST" action="action_update.php">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="hidden" name="id_penjualan" value="<?php echo $row['id_penjualan']?>">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputBarang" name="nama_barang" value="<?php echo $row['nama_barang']?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputqty" class="form-label">QTY</label>
                        <input type="text" class="form-control" id="inputqty" name="qty" value="<?php echo $row['qty']?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputHarga" class="form-label">Harga</label>
                        <input type="text" class="form-control" id="inputHarga" name="harga_satuan" value="<?php echo $row['harga_satuan']?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        <a href="index.php" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    <?php }?>
</body>
</html>