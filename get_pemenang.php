<?php
include 'koneksi.php';
$no_undian = $_POST['no_undian'];
$query = mysqli_query($conn,"SELECT * FROM tbl_anggota WHERE no_undian = '$no_undian' ");
$data = mysqli_fetch_array($query);
echo json_encode($data);
?>