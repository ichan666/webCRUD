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
		/*nth-child untuk memilih elemen indeks ganjil(0dd), genap() */
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
		function konfirmasiUpdate() {
			// Mengambil nilai dari properti input(.value) dengan parameter 'id'
            var nim = document.getElementById('nim').value;
            var nama = document.getElementById('nama').value;
            var alamat = document.getElementById('alamat').value;

			//pengecekan jika value nya null, dengan operator logika OR
            if ( nim === "" || nama === "" || alamat === "" ) {
                alert("Anda harus mengisi atau melengkapi data terlebih dahulu!");
                return false;
            }
            return confirm("Apakah Anda sudah yakin?");
        }
	</script>
</head>

<body>
<h1 align="center">TAMBAH DATA</h1>
<form id="form1" name="form1" method="post" action="proses_simpan.php" onsubmit="return konfirmasiUpdate()">

  <table width="559" align="center" rules="rows">
    <tr>
      <td><div align="left"><label for="nim">NIM</label></div></td>
      <td><label>
        <input type="number" name="nim" id="nim"  />
      </label></td>
    </tr>
    <tr>
      <td><div align="left"><label for="nama">NAMA</label></div></td>
      <td>
        <input type="text" name="nama" id="nama" />
      </td>
    </tr>
    <tr>
      <td><div align="left"><label for="alamat">ALAMAT</label></div></td>
      <td><label>
        <input type="text" name="Alamat" id="alamat" />
      </label>
      </td>
    </tr>
    <tr>
      <td><div align="left"><label for="jk">KELAMIN</label></div></td>
      <td><label>
        <select name="jenis_kelamin" id="jk">
          <option value="L">L</option>
          <option value="P">P</option>
        </select>
      </label></td>
    <tr>
      <td colspan="2"><label>
        <div align="center">
          <input type="submit" name="button" id="button" value="simpan" />         
          <input type="reset" name="button2" id="button2" value="reset" />
        </div>
      </label></td>
    </tr>
  </table>
</form>

<br>
<div align="center"><a href="index.php" class="back">Kembali ke beranda</a></div>

</body>
</html>
