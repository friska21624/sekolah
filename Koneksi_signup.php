<?php
// Koneksi ke database
$servername = "localhost";
$username = "root"; // Username default di phpMyAdmin
$password = ""; // Password default biasanya kosong
$dbname = "loginpris";

// Buat koneksi
$conn = new mysqli("localhost", "root", "", "data_login");

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Cek jika form sudah di-submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi password dan konfirmasi password
    if ($password === $confirm_password) {
        // Hash password sebelum disimpan ke database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query untuk memasukkan data
        $sql = "INSERT INTO users (first_name, last_name, email, password)
                VALUES ('$first_name', '$last_name', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            // Redirect ke halaman login atau halaman lain
            header("Location: login.php");
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Passwords do not match!";
    }
}

// Tutup koneksi
$conn->close();
?>
