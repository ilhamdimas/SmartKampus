<?php
$conn = mysqli_connect(
    "localhost",
    "root",
    "smart_campus"
);

if(!$conn){
    die("Koneksi Gagal");
}

session_start();
?>