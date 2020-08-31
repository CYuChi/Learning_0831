<h3>大樂透預測</h3>
<hr>
<?php 
    session_start();
    $username = $_SESSION["username"];
    if($username == NULL){
        header("Location: login.php?redir=lotto.php");
        exit;
    }
    include "menu.php"; 
?>
<hr>
<?php
    // 前 6 個數字
    $count = 0 ;
    while($count < 6){
        $test = rand ( 1 , 49 );
        if(in_array($test , $lotto)) 
            continue;
        $lotto[] = $test ;
        $count++;
    }
    sort($lotto);
    foreach($lotto as $no)
        echo $no . "<br>";
    // special 數字
    do{
        $special = rand(1,49);
    }while(in_array($special , $lotto) == true);

    echo "<br>特別號 : " . $special;

?>
</hr>
<hr></hr>