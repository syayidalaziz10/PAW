<?php 
$koneksi = mysqli_connect("localhost","root","","alaziz");
$sql = "SELECT * FROM penjualan";
$tambah= mysqli_query($koneksi,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h3>TAMBAH DATA PENJUALAN</h3>
                </div>
            </div>
        </div>
        <form method="POST" action="action_insert.php">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="inputBarang" class="form-label">Nama Barang</label>
                        <input type="text" class="form-control" id="inputBarang" name="nama_barang" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputQty" class="form-label">QTY</label>
                        <input type="text" class="form-control" id="inputQty" name="qty" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputSatuan" class="form-label">Harga Satuan</label>
                        <input type="text" class="form-control" id="inputSatuan" name="harga_satuan" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        <a href="index.php" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>