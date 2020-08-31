<?php
    $fp = fopen("counter.txt", "r") or die("unable open file");
    $counter = fread($fp, filesize("counter.txt"));
    fclose($fp);
    

    echo "本網站參觀人數: ";
    readfile("counter.txt");
    echo "人<br>";

    $counter ++ ;

    $fp = fopen("counter.txt" , "w") or die("unable open file");
    fwrite($fp , $counter);
    fclose($fp);

?>
<br><center>
<a href="https://info.flagcounter.com/sA3z"><img src="https://s11.flagcounter.com/count/sA3z/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_6/viewers_0/labels_1/pageviews_0/flags_0/percent_0/" alt="Flag Counter" border="0"></a>
</center>