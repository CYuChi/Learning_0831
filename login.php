<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8">
    <title>Chi Try & Learn</title>
</head>
<body>
    <h2>登入我的網站</h2>
    <hr>
    <?php include "menu.php"; ?>
    <hr>
    <form method="POST" action="checkpass.php">
        帳號 : <input type="text" name="username"><br>
        電子郵件 : <input type="text" name="email"><br>
        密碼 : <input type="text" name="password"><br> 
        <input type="submit" value="登入">
    </form>
    <p>2020/08/31</p>
</body>


</html>