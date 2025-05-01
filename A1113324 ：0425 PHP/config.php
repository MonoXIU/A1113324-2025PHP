<?php
// 連接資料庫
$servername = "localhost";
$username = "root"; // 依你的伺服器改
$password = ""; // 依你的伺服器改
$dbname = "david_db";

$conn = new mysqli($servername, $username, $password, $dbname);

// 檢查連線
if ($conn->connect_error) {
    die("資料庫連線失敗: " . $conn->connect_error);
}

// 載入 PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
?>
