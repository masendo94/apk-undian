<?php
include 'koneksi.php';

$anggota_id = $_POST['no_undian'];
$kelompok_id = $_POST['kelompok_id'];

$input = mysqli_query($conn,"INSERT INTO history (id_kelompok,anggota_id) VALUES($kelompok_id,$anggota_id)");

$get = mysqli_query($conn,"SELECT * FROM history WHERE id_kelompok = 2 ");
$cek = mysqli_num_rows($get);

if($cek == 1){
    header('Location:kelompok1.php');
}
if($cek == 2){
  header('Location:kelompok2.php');
}
if($cek == 3){
    header('Location:kelompok2.php');
}
if($cek == 4){
  header('Location:kelompok2.php');
}
if($cek == 5){
    header('Location:kelompok1.php');
}
if($cek == 6){
  header('Location:kelompok1.php');
}
if($cek == 7){
    header('Location:kelompok2.php');
}
?>