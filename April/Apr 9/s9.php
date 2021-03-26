<?php
$gn=$_GET["n"];
$sn=rand(5,15);

if($sn==$gn){
    echo "Excellent! Your Guess is Correct!";
}
else{
    if(abs($sn) > $gn){
        echo "Your guess was too low";
    }
    else if(abs($gn-$sn)<=3){
        echo "You were close";
    }
    else if(abs($sn) < $gn){
        echo "Your guess was too high";
    }
    
    echo "<br> The right number is: ".$sn;
}
?>