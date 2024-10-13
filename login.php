<?php
include 'koneksilogin.php';
include 'session.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT id, password FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->bind_result($user_id, $hashed_password);
    $stmt->fetch();

    if (password_verify($password, $hashed_password)) {
        loginUser($user_id);
        header("Location: index.php");
        exit();
    } else {
        $error = "Email atau password salah.";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
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

    input[type="email"], input[type="password"] {
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
</style>
</head>
<body>

<div class="container">
    <h1>Login</h1>
    <?php if (isset($error)): ?>
        <p style="color: red; text-align: center;"><?php echo $error; ?></p>
    <?php endif; ?>
    <form action="login.php" method="post">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="email" required></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" required></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align:center;">
                    <button type="submit" class="btn">Login</button>
                    <button type="reset" class="btn btn-reset">Reset</button>
                </td>
            </tr>
            <tr>
        		<td colspan="2"><div align="center">Belum Punya Akun..? Klik <a href="register.php">Registrasi</a></div></td>
      		</tr>
        </table>
    </form>
</div>

</body>
</html>
