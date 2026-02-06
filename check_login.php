<?php
session_start();
include 'connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users 
        WHERE username = '$username' 
        AND password = '$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $_SESSION['username'] = $username;
    header("Location: index.php");
} else {
    echo "<script>
        alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');
        window.location='login.php';
    </script>";
}
?>

