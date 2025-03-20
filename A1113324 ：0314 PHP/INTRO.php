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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>迎新活動介紹，高大新生看過來</title>
</head>
<body>
    <h1>迎新-活動-介紹</h1>
    <p>誠摯地邀請您參加本次迎新活動，感受高雄大學的獨特吸引力</p>
    <p>本系所舉辦之迎新活動已有悠久歷史，年年致力於讓新生更快融入校園大家庭。</p>
    <p>來參加迎新活動，你可以：</p>
    <ul>
        <li>新生們將認識學長姐與同學、以及領導我們學習路途的教授</li>
        <li>當然，想要知曉學校的資源與設施，也能夠在介紹過程中探索</li>
        <li>並且會提供一個友好又輕鬆的交流環境</li>
        <li>因此，就趕緊點擊下方連結吧！</li>
        <img src="welcome.jpg" >
    </ul>

    <a href="PARTY.php">>>>>>>>>查看活動行程與報名<<<<<<<<</a>
</body>
</html>
<br><a href="logout.php">登出</a>
