<?php
include 'koneksilogin.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $confirm_password = $_POST['confirm_password'];

    // Memeriksa apakah password dan konfirmasi password sesuai
    if (!password_verify($confirm_password, $password)) {
        $error = "Konfirmasi password tidak sesuai.";
    } else {
        // Memeriksa apakah email sudah digunakan
        $sql = "SELECT id FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $error = "Email sudah terdaftar.";
        } else {
            // Menyimpan data ke database
            $sql = "INSERT INTO users (nama, email, password) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $nama, $email, $password);

            if ($stmt->execute()) {
                $success = "Registrasi berhasil. Silakan login.";
            } else {
                $error = "Terjadi kesalahan. Silakan coba lagi.";
            }
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registrasi</title>
<style>
    body {
        font-family: 'Varela Round', sans-serif;
        background-color: #f5f5f5;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 80%;
        max-width: 400px;
    }

    h1 {
        text-align: center;
        margin-bottom: 20px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    td {
        padding: 10px;
        text-align: left;
    }

    input[type="text"], input[type="email"], input[type="password"] {
        width: 100%;
        padding: 8px;
        margin: 5px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .btn {
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        margin-top: 10px;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #45a049;
    }

    .btn-reset {
        background-color: #f44336;
    }

    .btn-reset:hover {
        background-color: #da190b;
    }
.btn1 {        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        margin-top: 10px;
        transition: background-color 0.3s;
}
</style>
</head>
<body>

<div class="container">
    <h1>Registrasi</h1>
    <?php if (isset($error)): ?>
        <p style="color: red; text-align: center;"><?php echo $error; ?></p>
    <?php elseif (isset($success)): ?>
        <p style="color: green; text-align: center;"><?php echo $success; ?></p>
    <?php endif; ?>
    <form action="register.php" method="post">
      <table>
        <tr>
          <td>Nama:</td>
          <td><input type="text" name="nama" required></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="email" name="email" required></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input type="password" name="password" required></td>
        </tr>
        <tr>
          <td>Konfirmasi Password:</td>
          <td><input type="password" name="confirm_password" required></td>
        </tr>
        <tr>
          <td colspan="2" style="text-align:center;"><button type="submit" class="btn1">Daftar</button>
              <button type="reset" class="btn btn-reset">Reset</button></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center">Sudah Punya Akun..? Klik <a href="login.php">Login</a></div></td>
        </tr>
    </table>
  </form>
</div>

</body>
</html>
