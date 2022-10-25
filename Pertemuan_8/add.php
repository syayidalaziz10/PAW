<?php 
$koneksi = mysqli_connect("localhost","root","","db_008");
$sql = "SELECT * FROM tbl_aziz";
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
                    <h3>TAMBAH DATA MAHASISWA</h3>
                </div>
            </div>
        </div>
        <form method="POST" action="actionadd.php">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputNama" name="nama_aziz" required>
                    </div>
                    <div class="mb-3">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" name="alamat_aziz" required>
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        <a href="table.php" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>