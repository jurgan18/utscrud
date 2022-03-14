<?php
require 'function.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index.php';
    </script>
";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hapus Data Mahasiswa</title>
</head>

<body>

    <h1>hapus Data Mahasiswa</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $mhs["id"] ?>">
        <ul>
            <li>
                <label for="nama"> NAMA : </label>
                <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"] ?>">
            </li>
            <li>
                <label for="npm"> NPM : </label>
                <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
            </li>
            <li>
                <label for="jurusan"> JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
            </li>
            <li>
                <label for="email"> EMAIL : </label>
                <input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
            </li>
            <li>
                <label for="gambar"> PHOTO : </label>
                <input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
            </li>
            <li>
                <button type="submit" name="submit">hapus Data</button>
            </li>
        </ul>

    </form>

</body>

</html>