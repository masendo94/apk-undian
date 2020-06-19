<?php
include 'koneksi.php';

$anggota_id = $_POST['no_undian'];
$kelompok_id = $_POST['kelompok_id'];
// var_dump($kelompok_id);die;

mysqli_query($conn,"INSERT INTO history (id_kelompok, anggota_id) VALUES($kelompok_id,$anggota_id)");

// $get = mysqli_query($conn,"SELECT * FROM history WHERE id_kelompok = 1 ");
// $cek = mysqli_num_rows($get);
header('Location:coba.php');

// if($cek > 0){
//   header('Location:kelompok2.php');
// }
?>