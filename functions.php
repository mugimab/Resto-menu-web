<?php

//koneksi
$conn = mysqli_connect("localhost","root","","dinamis");

function registrasi ($data) {
    
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn,$data["password"]);
    $password1 = mysqli_real_escape_string($conn,$data["password1"]);

//cek username
$result = mysqli_query($conn, "select username from pengguna where username ='$username'");
if(mysqli_fetch_assoc($result)) {
echo " <script>
            alert('username sudah ada');
    </script>";
    return false;

}

//cek konfirmasi pasword

if ($password !== $password1) {
    echo " <script>
            alert('konfirmasi password tidak cocok');
    </script>";
    return false;

}

// tambahkan user baru 
$password = password_hash($password, PASSWORD_DEFAULT);
//$password = md5($password);
mysqli_query($conn, "insert into pengguna values('','$username','$password')");

return mysqli_affected_rows($conn);

}
?> 
