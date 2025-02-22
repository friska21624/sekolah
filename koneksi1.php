<?php

$conn = mysqli_connect('127.0.0.1','root','', 'nilai_mkk');

if($conn->connect_errno){
	//tampilan errornya
	echo "error: " . $conn->connect_error ;
}
?>