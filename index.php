<?php
include 'session.php';
checkLogin();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="img/cyber.png">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<style>
		body {
			font-family: 'Varela Round', sans-serif;
			}
        table {
            width: 90%;
            border-collapse: collapse;
			background-color:#f9f9f9;
			
        }
        td {
            border: 1px solid #cccccc;
            padding: 8px;
            text-align: left;
        }
		/*nth-child untuk memilih elemen indeks ganjil(0dd), genap() */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
		a {
			text-decoration: none;
			}
    </style>
	<script>
		function konfirmasi(){
			return confirm("Apakah anda yakin akan logout?");
		}
	</script>
</head>

<body>
<div align="center">
  <h1><strong>BELAJAR PHP</strong></h1>
</div>
<table width="300" align="center" rules="rows">
  <tr>
    <td width="559" ><div align="left">Beranda</div></td>
    <td width="90" ><div align="center" ><a href="lihat.php" >Lihat Data</a></div></td>
    <td width="90"><div align="center"><a href="tambah.php" >Tambah Data</a></div></td>
    <td width="90"><div align="center"><a href="cari.php" >Cari Data</a></div></td>
    <td width="90"><div align="center"><a href="logout.php" onclick="return konfirmasi()" >Logout</a></div></td>
  </tr>
</table>

</body>
</html>
