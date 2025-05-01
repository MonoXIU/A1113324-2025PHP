<?php
include 'config.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // 登入成功
    session_start();
    $_SESSION['username'] = $username;
    header("Location: upload.php");
} else {
    // 登入失敗
    echo "帳號或密碼錯誤，請<a href='login.php'>返回</a>重試。";
}
?>