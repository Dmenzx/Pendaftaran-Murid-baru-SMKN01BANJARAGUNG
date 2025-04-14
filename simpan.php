<?php
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

$sql = "INSERT INTO akun (email, password) VALUES ('$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Data berhasil disimpan. <a href='login.html'>Kembali</a>";
} else {
    echo "Error: " . $conn->error;
}
$conn->close();
?>