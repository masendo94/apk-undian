<?php 
include 'koneksi.php';
mysqli_query($conn,"DELETE FROM history");
header('Location: coba.php');
?>