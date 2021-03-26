<?php
    $fruitNo=$_GET["fruitNo"];
    $fruitImg="<img src=fruitImg/fruit".$fruitNo.".png>";
    echo "Hello Client, I am the server and <br>";
    echo "Fruit #".$fruitNo." is <br>".$fruitImg;
?>