<?php
session_start();

// Cek apakah pengguna sudah login
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Arahkan pengguna ke halaman login jika belum login
function checkLogin() {
    if (!isLoggedIn()) {
        header("Location: login.php");
        exit();
    }
}

// Mendapatkan ID pengguna saat ini
function getUserId() {
    return $_SESSION['user_id'];
}

// Login pengguna
function loginUser($user_id) {
    $_SESSION['user_id'] = $user_id;
}

// Logout pengguna
function logoutUser() {
    session_unset();
    session_destroy();
}
?>
