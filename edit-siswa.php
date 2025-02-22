<?php
// Tampilkan semua error
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'koneksi1.php';

if (isset($_POST['nisn'])) {
    // Ambil data dari form
    $nisn = $_POST['nisn'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nilai = $_POST['nilai'];

    // Cek apakah ada siswa lain dengan nama yang sama tetapi NISN berbeda
    $checkQuery = "SELECT * FROM daftar_nilaii WHERE nama = '$nama' AND nisn != '$nisn'";
    $checkResult = mysqli_query($conn, $checkQuery);

    if (!$checkResult) {
        die("Error pada query: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($checkResult) > 0) {
        echo "<script>alert('Udah ada, ga bisa update dengan data yang sama!'); window.location.href = 'belajarr2.php';</script>";
    } else {
        // Update data di database
        $query = "UPDATE daftar_nilaii SET nama='$nama', kelas='$kelas', nilai='$nilai' WHERE nisn='$nisn'";
        
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Yeayy berhasil di update!!!'); window.location.href = 'belajarr2.php';</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
} else {
    echo "Data tidak lengkap!";
}

mysqli_close($conn);
?>
