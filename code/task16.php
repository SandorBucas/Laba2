<?php

//Task 16
function increaseEnthusiasm($sx = "null")
{
    return $sx . "!";
}
echo "<br>" . increaseEnthusiasm("Hello World?");
function repeatThreeTimes($sx = "null")
{
    return $sx . $sx . $sx;
}
echo "<br>" . repeatThreeTimes("Hello World? ");
echo "<br>" . increaseEnthusiasm(repeatThreeTimes("Help me pls "));
function cut($sx = "null", $charsFromStart = 10)
{
    return substr($sx,0,$charsFromStart);
}
//echo "<br>" . cut(increaseEnthusiasm(repeatThreeTimes("Help me pls ")), 5);
function ArrayTask($arr,$endIter,$nowIter = 0)
{
    echo $arr[$nowIter] . " ";
    if ($nowIter < $endIter){
        ArrayTask($arr, $endIter, ++$nowIter);
    }else
        return;
}
function NumSum($num,$sum=0)
{
    while ($num > 0)
    {
        $sum+=$num%10;
        $num/=10;
    }
    echo "$sum ";
    if ($sum>9)
        NumSum($sum);
    else return;
}
