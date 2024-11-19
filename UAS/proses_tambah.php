<?php
include 'koneksi.php'; // Pastikan koneksi berhasil

// Ambil data dari form
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$email = $_POST['email'];
$nomer = $_POST['nomer']; // Pastikan ini sesuai dengan input form Anda
$jurusan = $_POST['jurusan'];

// Buat query untuk memasukkan data
$sql = "INSERT INTO mahasiswa (nama, nim, email, nomer, jurusan) VALUES ('$nama', '$nim', '$email', '$nomer', '$jurusan')";

// Eksekusi query
if ($conn->query($sql) === TRUE) {
    header("Location: index.php"); // Redirect jika berhasil
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error; // Tampilkan error jika ada
}

// Tutup koneksi
$conn->close();
?>