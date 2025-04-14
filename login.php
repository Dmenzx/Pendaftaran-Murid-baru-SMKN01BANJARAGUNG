<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db   = "db_login";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM akun WHERE email='$email' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $_SESSION['email'] = $email;
    header("Location: dashboard.php");
} else {
    echo "Login gagal. <a href='login.html'>Coba lagi</a>";
}
$conn->close();
?>