<?php
    session_start();
    //將session紀錄砍掉
    session_unset();
    header("Location:index.php");
?>