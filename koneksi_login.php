<?php
// koneksi_login.php

// Konfigurasi database
$host = "localhost"; // Sesuaikan dengan host database Anda
$user = "root"; // Sesuaikan dengan username database Anda
$password = ""; // Sesuaikan dengan password database Anda
$database = "loginpris"; // Sesuaikan dengan nama database Anda

// Membuat koneksi ke database
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Fungsi login
function login($username, $password) {
    global $koneksi;

    // Mencegah SQL injection
    $username = mysqli_real_escape_string($koneksi, $username);
    $password = mysqli_real_escape_string($koneksi, $password);

    // Query untuk mengambil data pengguna dari database berdasarkan username
    $query = "SELECT * FROM loginpris WHERE username='$username' LIMIT 1";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    // Cek jika pengguna ditemukan dan password benar
    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}

// Tutup koneksi
function close_connection() {
    global $koneksi;
    mysqli_close($koneksi);
}
?>
