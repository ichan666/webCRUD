<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form tambah.php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$Alamat = $_POST['Alamat'];
$jenis_kelamin = $_POST['jenis_kelamin'];
 
// menginput data ke database
mysqli_query($conn,"insert into tb_belajar values('','$nim','$nama','$Alamat','$jenis_kelamin')");
 
// mengalihkan halaman kembali ke index.php
header("location:lihat.php");
 
?>