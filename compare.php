<h3>產品比較</h3>
<hr>
<?php
    session_start();
    $username = $_SESSION["username"];
    if($username == NULL){
        header("Location: login.php?redir=compare.php");
        exit;
    }
    $tags = "<iframe width='560' height='315' src='https://www.youtube.com/embed/^^^^' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
    include "menu.php"; 
?>
<hr>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>產品比較</title>
    </head>
    <body>
        <h2>螢幕比較</h2>
        <hr>
        <?php
            //echo $tags;
            $fp = fopen("product.txt" , "r")or die("bye");
            $data = fread($fp , filesize("product.txt"));
            fclose($fp);
            $computer = explode("\n",$data);
            foreach($computer as $comAndModel){
                $ComAndVideo = explode("," , $comAndModel);
                $model = trim($ComAndVideo[0]);
                $vid = trim($ComAndVideo[1]);
                echo $model . "<br>";
                echo str_replace("^^^^" , $vid , $tags);
                echo "<br>";
                
            
            }
        ?>
    </body>
    
</html>