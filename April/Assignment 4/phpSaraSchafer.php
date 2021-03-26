<?php
    $fruitNo=$_GET["fruitList"];
    $fruitName=$_GET["fruitName"];
    $fruitImg="<img src=fruitImg/fruit".$fruitNo.".png>";
    $sn=rand(1,10);

    if($sn==$fruitNo){
    echo "Correct Guess! The selected fruit is <br>".$fruitImg;
    }
    else{
        $str="<img src=fruitImg/fruit".$sn.".png>";
        echo "No ".$fruitName." is not the right selection. <br>The selected server fruit is <br>".$str;
    }
?>