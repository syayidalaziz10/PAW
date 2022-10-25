<?php 
$koneksi = mysqli_connect("localhost","root","","db_008");
$id = $_GET['id'];
$sql ="SELECT *FROM tbl_aziz WHERE id_aziz=$id";

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
        while ($rowMhs=mysqli_fetch_assoc($update)){ ?>
        <div class="container mt-3">
            <div class="row text-center">
                <div class="col">
                    <h2>Update Data Mahasiswa</h2>
                </div>
            </div>
            <form method="POST" action="actionupdate.php">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="mb-3">
                        <input type="hidden" name="id_aziz" value="<?php echo $rowMhs['id_aziz']?>">
                        <label for="inputNama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="inputNama" name="nama_aziz" value="<?php echo $rowMhs['nama_aziz']?>">
                    </div>
                    <div class="mb-3">
                        <label for="inputAlamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="inputAlamat" name="alamat_aziz" value="<?php echo $rowMhs['alamat_aziz']?>">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-sm btn-success">Submit</button>
                        <a href="table.php" class="btn btn-sm btn-danger">Cancel</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    <?php }?>
</body>
</html>