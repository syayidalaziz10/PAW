<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-3">
        <h2>Tambah Data Mahasiswa</h2>
        <form method="POST" action="actiondata.php">
            <div class="mb-3 mt-3">
                <input type="text" class="form-control" id="prodi" placeholder="Id Prodi" name="id_prodi">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="nama" placeholder="Nama Mahasiswa" name="nama_mhs">
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" id="alamat" placeholder="Alamat" name="alamat_mhs">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
