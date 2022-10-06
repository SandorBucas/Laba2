<?php

//Task 17
$MmX = "";
$arrMmX = array();
for($i=1;$i<5;$i++)
{
    $MmX = $MmX . "x";
    array_push($arrMmX,$MmX);
    echo $arr[$i] . "<br>";
}
function arrayFill($Symbol,$pm)
{
    $temp = array();
    for ($i = 0;$i < $pm; $i++)
    {
        array_push($retArr,$Symbol);
    }
    return $temp;
}

$hardArray = array(
    array(1,2,3),
    array(4,5),
    array(6)
);
function SumCounter(array $array){
    $Sum = array_sum($array);
    foreach($array as $child) {
        if (is_array($child))
            $Sum += SumCounter($child);
    }
    return $Sum;
}
$Array3X3 = array();
for($i = 0; $i < 3; $i++){
    for($j = 0; $j < 3; $j++){
        $Array3X3[$i][$j] = $i +3*$j +1;
    }
}
$array2539 = array (2, 5, 3, 9);
$result = $array2539[0]*$array2539[1]+$array2539[2]*$array2539[3];
echo "<br>" . $result . "<br>";
$user = array(
    "surname" => "Ivanov",
    "name" => "Maksim",
    "patronymic" => "Romanovich"
);
foreach ($user as $str)
    echo $str . " ";
$date = array(
    "day" => 22,
    "month" => 05,
    "year" => 2022
);
echo $date["'year'"] . "-";
echo $date["'month'"] . "-";
echo $date["'day'"];
$TaskArray = array('a','b','c','d','e');
echo"<br>" . count($TaskArray);
echo"<br>" . $TaskArray[count($TaskArray)-1] . " " . $TaskArray[count($TaskArray)-2];

