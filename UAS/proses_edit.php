<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$nomer = $_POST['nomer'];
$jurusan = $_POST['jurusan'];

$sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', email='$email', nomer='$nomer', jurusan='$jurusan' WHERE id=$id";
if ($conn->query($sql) === TRUE) {
    header("Location: index.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>
