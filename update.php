<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$Alamat = $_POST['Alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 
// update data ke database
mysqli_query($conn,"update tb_belajar set nama='$nama', nim='$nim', Alamat='$Alamat', jenis_kelamin='$jenis_kelamin' where id='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:lihat.php");
 
?>
