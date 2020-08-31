<?php 
    session_start(); 
    $username = $_SESSION["username"];
    $email = $_SESSION["email"];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>Chi Try & Learn</title>
    </head>
    <body>
        <h3>Chi Try & Learn</h3>
        <h2>歡迎來到我的網站</h2>
        <hr>
        <?php include "menu.php"; ?>
        <hr>
        <?php
            
            if($username != NULL){
                echo "帳號:" . $username . "<br> Email:" . $email ."<br>"  ;
            }
            else{
                echo "歡迎訪客，登入獲得更多資訊!<br>";
            }
            include "footer.php";
        ?>
       
        <p>2020/08/31</p>
    </body>
</html>