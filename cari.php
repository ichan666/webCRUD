<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cari Data</title>
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

<h1 align="center"><strong>CARI DATA</strong></h1>
<form action="cari_data.php" method="get" onsubmit="return konfirmasi()">
<table width="316" align="center" rules="rows">
  <tr>
    <td width="73" height="66">
    <label for="id">
    <div align="center">Masukan ID :</div>
    </label>    </td>
    <td width="227">
    <input type="text" id="id" name="id">
    <input type="submit" value="Cari">
    </td>
  </tr>
</table>
</form>
<br>
<div align="center"><a href="index.php" class="back">Kembali ke beranda</a></div>
</body>
</html>
