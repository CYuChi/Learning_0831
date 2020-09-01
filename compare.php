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
        <!-- option set  from here   ----  select name comChoice      -->
        <form method = 'POST' action="compare.php">
            <select name = comChoice>
            <?php
                //open txt 
                $fp = fopen("product.txt" , "r")or die("bye");
                //read txt
                $data = fread($fp , filesize("product.txt"));
                //close txt
                fclose($fp);
                //cut once
                $computer = explode("\n",$data);
                //cut twice
                foreach($computer as $comAndModel){
                    $ComAndVideo = explode("," , $comAndModel);
                    $model = trim($ComAndVideo[0]);
                    $vid = trim($ComAndVideo[1]);
                    // option set here ---- value = $vid --- $model = $model 
                    echo "<option value =" . $vid . ">" . $model . "</option>";
                    echo str_replace("^^^^" , $vid , $tags);
                    echo "<br>";
                }
            ?>
            </select>
            <input type="submit" value="開始轉換">
        </form>
        <!-- show video & model -->
        <?php
            //$model = $_POST[model]
            $comChoice = $_POST["comChoice"];
            echo str_replace("^^^^" , $comChoice , $tags);
            echo "<br>";
        ?>
    </body>
    
</html>