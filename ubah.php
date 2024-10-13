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
    <script>
		function konfirmasi() {
            return confirm("Apakah Anda sudah yakin?");
      	  }
	</script>
</head>

<body>
<h1 align="center">UBAH DATA</h1>
<?php
	include 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($conn,"select * from tb_belajar where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>

<form id="form1" name="form1" method="post" action="update.php" onsubmit="return konfirmasi()">
  <table width="816" align="center" rules="rows">
    <tr>
      <td width="148">NIM</td>
      <td width="652"><label>
        <input type="hidden" name="id" id="textfield4"  value="<?php echo $d['id']; ?>" />
        <input type="number" name="nim" id="textfield"  value="<?php echo $d['nim']; ?>">
      </label></td>
    </tr>
    <tr>
      <td>NAMA</td>
      <td><label>
        <input type="text" name="nama" id="textfield2" value="<?php echo $d['nama']; ?>">
      </label></td>
    </tr>
    <tr>
      <td>ALAMAT</td>
      <td><label>
        <input type="text" name="Alamat" id="textfield3" value="<?php echo $d['Alamat']; ?>">
      </label></td>
    </tr>
    <tr>
      <td>Jenis Kelamin</td>
      <td><label>
        <select name="jenis_kelamin" id="select">
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
      </label></td>
    </tr>
    <tr>
       <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="button" id="button" value="Update" onclick="myFunction()" />
          <input type="reset" name="button2" id="button2" value="Reset" />
        </div>
        </label> </td>
    </tr>
  </table>
</form>
<?php 
	}
	?>
<br>
<div align="center"><a href="index.php" class="back">Kembali ke beranda</a></div>

</body>
</html>
