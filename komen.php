<?php
// Mulai session
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}

// Koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "dinamis");

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Ambil semua komentar dari tabel `cns`
$sql = "SELECT nama, komentar, created_at FROM cns ORDER BY created_at DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Mugi Resto</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            width: 80%;
            margin: 20px auto;
            background: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            border-radius: 8px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .comment {
            margin-bottom: 20px;
            padding: 15px;
            border-bottom: 1px solid #ddd;
        }

        .comment:last-child {
            border-bottom: none;
        }

        .comment .name {
            font-weight: bold;
            color: #555;
            margin-bottom: 5px;
            text-align: left;
        }

        .comment .timestamp {
            font-size: 12px;
            color: #999;
            margin-bottom: 10px;
            text-align: left;
        }

        .comment .text {
            font-size: 14px;
            color: #333;
            line-height: 1.6;
            text-align: left;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            text-decoration: none;
            color: #007BFF;
            font-size: 14px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Comments and Suggestions</h1>

        <p>Thank you for sharing your thoughts and feedback. Your input helps us improve our services and offerings.</p>

        <?php if (mysqli_num_rows($result) > 0): ?>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="comment">
                    <div class="name"><?php echo htmlspecialchars($row['nama']); ?></div>
                    <div class="timestamp"><?php echo date("F j, Y, g:i a", strtotime($row['created_at'])); ?></div>
                    <div class="text"><?php echo nl2br(htmlspecialchars($row['komentar'])); ?></div>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No comments available yet. Be the first to leave feedback!</p>
        <?php endif; ?>

        <div class="back-link">
            <a href="index.php">Back to Home</a>
        </div>
    </div>

    <?php
    // Tutup koneksi
    mysqli_close($conn);
    ?>
</body>
</html>
