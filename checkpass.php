<?php
    session_start();
    //抓取網址辨別來源地
    $redir = $_POST["redir"];
    //抓表單資料
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($password == "1234"){
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        if($redir != NULL)
            header("Location: $redir");
        else
            header("Location:index.php");
        exit;
    }
    else{
        echo "密碼輸入錯誤!<br>";
        echo "<a href='login.php'>回到上一頁重新輸入</a>";
    }
    echo $username . "<br>" . $email . "<br>". $password;





?>