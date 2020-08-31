<?php
    session_start();
    $username = $_SESSION["username"];
    $link_homepage = "<a href='index.php'>首頁</a> ‧ ";
    $link_login = "<a href='login.php'>登入</a> ";
    $link_lotto = "<a href='lotto.php'> 大樂透預測 </a> ";
    $link_logout = "<a href='logout.php'>登出</a> ";
    
    echo $link_homepage;
    //沒登入顯示
    if($username == NULL)
        echo $link_login;
    //有登入時顯示
    else{
        echo $link_lotto;
        echo $link_logout;
    }
        
?>

<!-- 混合寫法
<?php //有夠醜
    if($username == NULL){ ?>
        <a href="login.php">登入</a>
<?php }
     else{ ?>
        <a href="logout.php">登出</a>
<?php } ?>
-->