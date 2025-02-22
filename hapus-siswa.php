<?php 
// koneksi database
include 'koneksi1.php';
 
// menangkap data id yang di kirim dari url
$nisn = $_GET['nisn'];
 
 
// menghapus data dari database
mysqli_query($conn,"delete from daftar_nilaii WHERE nisn='$nisn'");
 
// mengalihkan halaman kembali ke index.php
header("location:belajarr2.php");

?>