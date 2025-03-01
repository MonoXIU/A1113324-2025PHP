<?php
$bg_color = "#8B0000"; 
$text_color = "#ffffff"; 
?>
<!DOCTYPE html>
<html lang="zh-TW">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>迎新活動行程與報名</title>
</head>

<body>
    <h1>迎新活動行程</h1>
    <table border="1">
        <tr>
            <th>時間</th>
            <th>活動內容</th>
        </tr>
        <tr>
            <td>13:00 - 14:00</td>
            <td>報到與迎賓茶會</td>
        </tr>
        <tr>
            <td>14:00 - 15:30</td>
            <td>校園導覽</td>
        </tr>
        <tr>
            <td>15:40 - 17:30</td>
            <td>團體遊戲與破冰活動</td>
        </tr>
        <tr>
            <td>17:30 - 18:50</td>
            <td>晚餐與交流時間</td>
        </tr>
            <td>19:00 - 21:00</td>
            <td>夜戰與試膽大會</td>
        </tr>
    </table>
    
    <h2>報名表</h2>
    <form action="REPLY.php" method="post">
        <label for="name">姓名：</label>
        <input type="text" id="name" name="name" required><br>

        <label for="name">學號：</label>
        <input type="num" id="num" name="num" required><br>
        
        <label for="gender">選擇性別:</label>
        <input type="radio" name="gender" value="男">男
        <input type="radio" name="gender" value="女">女

        <label for="email">Email：</label>
        <input type="email" id="email" name="email" required><br>
        
        <label for="phone">手機號碼：</label>
        <input type="text" id="phone" name="phone" required><br>
        
        <br>上傳照片:<input type="file" name="file"><br>
        
        提供意見:<textarea name="comment" value="" rows="10" cols="20"></textarea><br>
        <input type="submit" value="送出資料">
        <input type="reset" value="清除資料">
    </form>
</body>
</html>