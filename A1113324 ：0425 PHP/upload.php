<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>檔案上傳</title>
</head>
<body>
    <h2>Hi <?php echo $_SESSION['username']; ?>，請上傳圖片</h2>
    <form action="sendMail.php" method="post" enctype="multipart/form-data">
        選擇圖片: <input type="file" name="fileToUpload"><br>
        <input type="submit" value="上傳並寄信">
    </form>
</body>
</html>