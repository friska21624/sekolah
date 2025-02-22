<?php

include 'koneksi1.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];

    $checkNisnQuery = "SELECT * FROM daftar_nilaii WHERE nisn = '$nisn'";
    $checkNisnResult = $conn->query($checkNisnQuery);

    if ($checkNisnResult === false) {
        echo "Error: " . $conn->error;
    } else {
        if ($checkNisnResult->num_rows > 0) {
            echo "<script>alert('NISN sudah ada, ga bisa nambah data baru kalo NISNnya sama!'); window.location.href = 'belajarr2.php';</script>";
        } else {
            $checkQuery = "SELECT * FROM daftar_nilaii WHERE nama = '$nama'";
            $checkResult = $conn->query($checkQuery);

            if ($checkResult === false) {
                echo "Error: " . $conn->error;
            } else {
                if ($checkResult->num_rows > 0) {
                    echo "<script>alert('Nama udah ada, ga bisa nambah data baru kalo namanya sama!'); window.location.href = 'belajarr2.php';</script>";
                } else {
                    $sql = "INSERT INTO daftar_nilaii (nisn, nama, kelas, nilai) VALUES('$nisn', '$nama', '$kelas','$nilai')";
                    if ($conn->query($sql) === TRUE) {
                        echo "<script>window.location.href = 'belajarr2.php';</script>";
                    } else {
                        echo "Error: " . $conn->error; 
                    }
                }
            }
        }
    }
}
?>
