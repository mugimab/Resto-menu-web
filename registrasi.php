<html>
<head>
    <title>The Mugi Resto</title>
    <link rel="stylesheet" href="my.css">
    <style>
        /* Tambahan gaya untuk tombol */
        button, a.button {
            background-color: #4CAF50; /* Warna hijau */
            color: white;
            padding: 10px 20px;
            margin: 10px 0;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            text-align: center;
            display: inline-block;
            cursor: pointer;
        }
        button:hover, a.button:hover {
            background-color: #45a049;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Registrasi Data</h1>
        <form action="periksa.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label><br>
                <input type="text" name="username" id="username" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label><br>
                <input type="password" name="password" id="password" required>
            </div>
            <div class="form-group">
                <label for="password1">Confirm Password:</label><br>
                <input type="password" name="password1" id="password1" required>
            </div>
            <button type="submit" name="daftar">Sign Up</button>
        </form>
        <br>
        <a href="login.php" class="button">Log In</a>
    </div>
</body>
</html>
