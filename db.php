<?php
$host = "localhost:8080"; // Ganti dengan host Anda
$username = "Ayii"; // Ganti dengan username MySQL Anda
$password = "12345678"; // Ganti dengan password MySQL Anda
$database = "nama_database"; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
