<?php
include 'config.php';
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}

// 檔案上傳
$target_dir = "uploads/";
if (!is_dir($target_dir)) {
    mkdir($target_dir); // 沒有 uploads 資料夾就創
}
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // 成功上傳
    // 開始寄信
    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; 
        $mail->SMTPAuth = true;
        $mail->Username = 'a1101224@mail.nuk.edu.tw'; 
        $mail->Password = 'cjt****fnyc****'; // 成功寄信，但這邊我隱藏起來
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('a1101224@mail.nuk.edu.tw', 'David Upload System');
        $mail->addAddress('a1113324@mail.nuk.edu.tw');

        $mail->Subject = 'David已上傳檔案';
        $mail->Body    = 'David已成功上傳檔案，請查收！';
        $mail->addAttachment($target_file);

        $mail->send();
        header("Location: success.php");
    } catch (Exception $e) {
        echo "寄信失敗: {$mail->ErrorInfo} <a href='failMail.php'>回去</a>";
    }
} else {
    echo "檔案上傳失敗，請<a href='upload.php'>重試</a>";
}
?>

