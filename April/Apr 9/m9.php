<?php
$fruitNo=$_GET["fruitList"];
$fruitName=$_GET["fruitName"];
$fruitImg="<img src=fruitImg/fruit".$fruitNo.".png>";
echo "Hello Client, I am the Server and <br>";
echo "Fruit #".$fruitNo." is <br>".$fruitName."<br>".$fruitImg;

echo "<br>";
for($i=1; $i<=10; $i++) {
    $str.="<img src=fruitImg/fruit".$i.".png>";
}
echo $str;

?>