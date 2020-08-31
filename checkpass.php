<?php
    session_start();
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    if($password == "1234"){
        $_SESSION["username"] = $username;
        $_SESSION["email"] = $email;
        header("Location:index.php");
        exit;
    }
    else{
        echo "密碼輸入錯誤!<br>";
        echo "<a href='login.php'>回到上一頁重新輸入</a>";
    }
    echo $username . "<br>" . $email . "<br>". $password;





?>