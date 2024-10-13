<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
    <style>
		body {
			font-family: 'Varela Round', sans-serif;
			}
        table {
            width: 90%;
            border-collapse: collapse;
        }
 		td {
            border: 1px solid #cccccc;
            padding: 8px;
            text-align: left;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
		.back {
			padding: 10px 20px;
			background-color: #3399FF;
			color: white;
			border: none;
			border-radius: 5px;
			text-decoration:none;
		}
    </style>
</head>
<body>
<h1 align="center">Hasil Pencarian Data Berdasarkan ID</h1>
<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from tb_belajar where id='$id'");
		if($row = mysqli_fetch_assoc($data)) : ?>
	<table width="559" align="center" rules="rows">
            <tr>
                <td><div align="center">ID</div></td>
                <td><div align="center">NIM</div></td>
                <td><div align="center">Nama</div></td>
                <td><div align="center">Alamat</div></td>
                <td><div align="center">Kelamin</div></td>
            </tr>
            <tr>
                <td><div align="center"><?php echo $row['id']; ?></div></td>
                <td><div align="center"><?php echo $row['nim']; ?></div></td>
                <td><div align="left"><?php echo $row['nama']; ?></div></td>
                <td><div align="left"><?php echo  $row['Alamat']; ?></div></td>
                <td><div align="center"><?php echo $row['jenis_kelamin'] ; ?></div></td>
            </tr>
    <?php else: ?>
        <p><div align="center">Data tidak ditemukan, atau id yang anda masukan salah..!</div></p>
	<?php endif; ?>
	</table>
<br>
<div align="center"><a href="index.php" class="back">Kembali ke beranda</a></div>

</body>
</html>