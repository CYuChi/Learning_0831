<?php 
    $redir = $_GET["redir"];

?>
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
        <!-- 將來源網址一倂post出去，但不讓人看到，所以用hidden -->
        <input type="hidden" name="redir" value=<?php echo $redir; ?>>
        你的帳號 : <input type="text" name="username"><br>
        電子郵件 : <input type="text" name="email"><br>
        你的密碼 : <input type="text" name="password"><br> 
        <input type="submit" value="登入">
    </form>
    <p>2020/08/31</p>
</body>


</html>