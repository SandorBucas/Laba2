<?php

//Task 18
function F1($pm1, $pm2){
    $sum = $pm1 + $pm2;
    if ($sum>10)
        return true;
    else return false;
}
function F2($pm1, $pm2){
    if ($pm1 == $pm2)
        return true;
    else return false;
}
function F3 ($pm1){
    if($pm1 < 10 || $pm1 > 99)
        echo "Out of diaposon";
    else{
        $Sum = $pm1 %10 + (($pm1 - $pm1 %10)/10);
        if($Sum<10)
            echo "Sum < 10";
        else
            echo "Sum > 10";
    }
}

$arrT18 = array(1, 2, 3, 5);
if(count($arrT18)==3)
    echo array_sum($arrT18) ."<br>";
else
    echo "<br>";
