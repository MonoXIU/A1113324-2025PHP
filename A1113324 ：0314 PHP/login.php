<html>
<head>
    <meta charset="UTF-8">
    <title>使用者登入</title>
</head>
<body bgcolor="#E0F2F1" text="#0B3B39">
    <h2>🔑 使用者登入</h2>
    <p>帳號密碼預設為user</p>
    <form action="logincheck.php" method="post">
        <label for="username">帳號：</label>
        <input type="text" name="username" id="username" required><br><br>

        <label for="password">密碼：</label>
        <input type="password" name="password" id="password" required><br><br>

        <input type="submit" value="登入">
    </form>
</body>
</html>