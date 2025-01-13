<?php
session_start();
require 'functions.php';
if (isset($_SESSION["login"])) {
    header("location: index.php");
    exit;
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");

    // Cek user
    if (mysqli_num_rows($result) === 1) {
        // Cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])) {
            // Set session
            $_SESSION["login"] = true;
            header("location: index.php");
            exit;
        }
    }

    $error = true;
}
?>
<html>
<head>
    <title>The Mugi Resto</title>
    <link rel="stylesheet" href="my.css">
</head>
<body>
<div class="container">
    <h1>Log in</h1>

    <?php if (isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username / password salah</p>
    <?php endif; ?>
    
    <form action="" method="post">
        <div class="form-group">
            <label for="username">Username:</label><br>
            <input type="text" name="username" id="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label><br>
            <input type="password" name="password" id="password" required>
        </div>
        <div class="form-group">
            <button type="submit" name="login">Login</button>
            <button type="reset">Cancel</button>
        </div>
    </form>
    <br>
    <!-- Tombol Sign Up -->
    <a href="registrasi.php" class="button">Sign Up</a>
</div>
<style>
    .container {
        max-width: 400px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }
    .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #4CAF50;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 10px;
        cursor: pointer;
    }
    .button:hover {
        background-color: #45a049;
    }
</style>
</body>
</html>
