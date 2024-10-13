<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<style>
		body {
			font-family: 'Varela Round', sans-serif;
			}
		.judul {
			font-size: 16px;
			font-weight: bold;
		}
        table {
            width: 90%;
            border-collapse: collapse;
        }
        td {
            border: 1px solid #cccccc;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
		a {
			text-decoration:none;
			color:#FFFFFF;
		}
		.ubah {	
			padding: 10px 20px;
			background-color: #4CAF50;
			border: none;
			border-radius: 5px;
			margin: 10px;
 	   }
		.hapus {
			background-color: #f44336;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			margin: 10px;
		}
       .back {
			padding: 10px 20px;
			background-color: #3399FF;
			color: white;
			border: none;
			border-radius: 5px;
		}
    </style>
    
	<script>
        function konfirmasihapus() {
            return confirm("Apakah Anda yakin ingin menghapus data ini?");
      		}
    </script>
</head>

<body>
<div align="center" class="judul">
  <h1>TABEL MAHASISWA</h1>
</div>

<table width="559" align="center" rules="rows">
  <tr>
    <td width="69"><div align="center">NO</div></td>
    <td width="69"><div align="center">ID</div></td>
    <td width="146"><div align="center">Nim</div></td>
    <td width="210"><div align="center">Nama</div></td>
    <td width="240"><div align="center">Alamat</div></td>
    <td width="119"><div align="center">Kelamin</div></td>
    <td width="223"><div align="center">Opsi</div></td>
  </tr>
  <?php 
		include 'koneksi.php';
		//bisa juga menggunakan require
		$no = 1;
		$data = mysqli_query($conn,"select * from tb_belajar");
		while($d = mysqli_fetch_array($data)){
			?>
  <tr>
    <td><div align="center"><?php echo $no++; ?></div></td>
    <td><div align="center"><?php echo $d['id']; ?></div></td>
    <td><div align="center"><?php echo $d['nim']; ?></div></td>
    <td><div align="left"><?php echo $d['nama']; ?></div></td>
    <td><div align="left"><?php echo $d['Alamat']; ?></div></td>
    <td><div align="center"><?php echo $d['jenis_kelamin']; ?></div></td>
    <td colspan="2">
    	<div align="center">
   			<button type="button" class="hapus"><a href="hapus.php?id=<?php echo $d['id']; ?>" onclick="return konfirmasihapus()">HAPUS</a></button>
    		<button type="button" class="ubah"><a href="ubah.php?id=<?php echo $d['id']; ?>">UBAH</a></button>
    	</div>
    </td>
  </tr>
  <?php 
		}
		?>
</table>
<br>
<div align="center"><a href="index.php" class="back">Kembali ke beranda</a></div>

</body>

</html>
