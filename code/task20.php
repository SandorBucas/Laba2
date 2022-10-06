<?php

//Task 20
$arrm = array(1, 50, 67, 9, 45);
function Pm (array $arr , $num = 0, $Sum = 0){
    if($num < count($arr) - 1)
        Pm($arr, $num+1, $Sum+$arr[$num]);
    if($num == count($arr) - 1)
        echo ($Sum+$arr[$num])/$num;
}
//Pm (arrm);

function ONEHUNDRED($num = 1, $sum = 1){
    if($num < 100)
        ONEHUNDRED(num+1, $sum+$num);
    if($num == 100)
        echo $sum + $num;
}
     ONEHUNDRED();

function MasSqrt (array &$mass, $num = 0){
    if($num < count($mass)){
        $mass[$num] = sqrt($mass[$num]);
        echo $mass[num] ." ";
        MasSqrt($mass, num+1);
    }
}
$alphabet = array ('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$Newalpabet = array();
function NewAlphabetM(array &$Newalp, array $alp, $num){
    if($num<26){
        $Newalp["'alp[$num]'"] = $num + 1;
        NewAlphabetM($Newalp, $alp, num+1);
    }
}

$OneNULL = '1234567890';
$resultOneNULL = array_sum(str_split($strOneNULL, 2));
//echo $resultOneNULL;
