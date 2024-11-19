<?php
include 'koneksi.php';
$sql = "SELECT * FROM mahasiswa";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <a href="tambah_mahasiswa.php">Tambah Mahasiswa</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Email</th>
            <th>Nomer</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['nomer'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td>
                <a href="edit_mahasiswa.php?id=<?= $row['id'] ?>">Edit</a>
                <a href="hapus_mahasiswa.php?id=<?= $row['id'] ?>">Hapus</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
