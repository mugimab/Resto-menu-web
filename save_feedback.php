<?php
// Mulai session
session_start();
if (!isset($_SESSION["login"])) {
    header("location: login.php");
    exit;
}


$conn = mysqli_connect("localhost", "root", "", "dinamis");


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $comments = mysqli_real_escape_string($conn, $_POST['comments']);
    
    
    $sql = "INSERT INTO cns (nama, email, komentar) VALUES ('$name', '$email', '$comments')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>
            alert('Thank you for your feedback!');
            window.location.href = 'index.php'; 
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Tutup koneksi
    mysqli_close($conn);
}
?>
