<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Nilai Siswa Hasil Ujian</h2>
    <p>Berikut adalah nilai siswa yang dapat di input berdasarkan mata pelajaran berikut : </p>
    <form action="nilaisiswa.php" method="post">
        <input type="text" name="nama" placeholder="Nama Siswa">
        <input type="number" name="induk" placeholder="Nomor Induk"></div>
        <input type="number" name="nilaiMtk" placeholder="Nilai Matematika">
        <input type="number" name="nilaiFisika" placeholder="Nilai Fisika">
        <input type="number" name="nilaiBiologi" placeholder="Nilai Biologi">
        <input type="number" name="nilaiKimia" placeholder="Nilai Kimia">
        <input type="submit" value="Input Data" id="input">
    </form>
    <?php
    //declare variable
    $nama = $_POST['nama'];
    $induk = $_POST['induk'];
    $nilaiMtk = $_POST['nilaiMtk'];
    $nilaiFisika = $_POST['nilaiFisika'];
    $nilaiBiologi = $_POST['nilaiBiologi'];
    $nilaiKimia = $_POST['nilaiKimia'];
    //count score
    $hitung = ($nilaiMtk+$nilaiFisika+$nilaiBiologi+$nilaiKimia)/4;
    //display table
    echo "<table>
    <tr>
        <th>Nama Siswa</th>
        <th>Nomor Induk</th>
        <th>Nilai MTK</th>
        <th>Nilai Fisika</th>
        <th>Nilai Biologi</th>
        <th>Nilai Kimia</th>
        <th>Rata - Rata</th>
    </tr>
    <tr>
        <td>$nama</td>
        <td>$induk</td>
        <td>$nilaiMtk</td>
        <td>$nilaiFisika</td>
        <td>$nilaiBiologi</td>
        <td>$nilaiKimia</td>
        <td>$hitung</td>
    </tr>
    </table>";
    ?>
</body>
</html>