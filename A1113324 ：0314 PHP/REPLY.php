<?php
session_start();
if (!isset($_SESSION["check"])) {
    header("Location: login.php");
    exit();
}
?>
<?php
$bg_color = "#8B0000"; 
$text_color = "#ffffff"; 
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>您的填寫結果(建議截圖保存)</title>
</head>

<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : "未輸入姓名";
    $num = isset($_POST['num']) ? htmlspecialchars($_POST['num']) : "未輸入學號";
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : "未輸入 Email";
    $gender = isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : "未選擇性別";
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : "未輸入手機號碼";
    $file = isset($_POST['file']) ? htmlspecialchars($_POST['file']) : "未上傳照片";
    $comment = isset($_POST['comment']) ? htmlspecialchars($_POST['comment']) : "未填寫建議";

    echo "<h1>報名成功</h1>";
    echo "<p>感謝您的報名，以下是您的報名資訊：</p>";
    echo "<ul>";
    echo "<li><strong>姓名：</strong>" . $name . "</li>";
    echo "<li><strong>學號：</strong>" . $num . "</li>";
    echo "<li><strong>Email：</strong>" . $email . "</li>";
    echo "<li><strong>性別：</strong>" . $gender . "</li>";
    echo "<li><strong>手機號碼：</strong>" . $phone . "</li>";
    echo "<li><strong>建議：</strong>" . $comment . "</li>";
    echo "</ul>";
}
?>
<br>
        期望見到您時能與您深入交流<br>
        <img src="TALK.jpg">
</body>

</html>
<br><a href="logout.php">登出</a>
