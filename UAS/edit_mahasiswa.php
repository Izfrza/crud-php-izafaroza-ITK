<?php
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$result = $conn->query($sql);
$data = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
</head>
<body>
    <h1>Edit Mahasiswa</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
        NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
        Email: <input type="text" name="email" value="<?= $data['email'] ?>"><br>
        Nomer: <input type="text" name="nomer" value="<?= $data['nomer'] ?>"><br>
        Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br>
        <button type="submit">Simpan</button>
    </form>
</body>
</html>
