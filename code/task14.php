<?php

//Task 14
$a = 10;
$b=3;
echo "<br>" . ($a%$b);
if ($a%$b==0)
    echo "<br>Делится<br>";
else echo "<br>Делится с остатком<br>" . ($a%$b);
echo $st = pow(2,10) . "<br>";
echo sqrt(245) . "<br>";

$arr = array(4,2,5,19,13,0,10);
$SUM = 0;
 foreach($arr as $item)
    $SUM += $item**2;
echo sqrt($SUM) . "<br>";
echo round(sqrt(379),0) . " ";
echo round(sqrt(379),1) . " ";
echo round(sqrt(379),2) . "<br>";
$arr2 = array(
    "floor" => floor(sqrt(587)),
    "ceil" => ceil(sqrt(587)));
$arr3=array(
    4,-2,5,10,-130,0,10
);
  $min=$arr3[0];
  $max=$arr3[0];
foreach($arr3 as $num)
    echo"$num ";
if ($min > $num)
    $min = $num;
if ($max < $num)
    $max = $num;
echo"<br>maximum - $max , minimum - $min";

echo "<br>" . rand(1,100) . "<br>";
$arr4 = array();
for($i = 0;$i<10;$i++) {
    array_push($arr4, rand(1, 100));
}

for($i = 0;$i<10;$i++) {
    echo "$arr4[$i] ";
}

for($i = 0; $i < 7;$i++)
{
    $a=rand(-100,100);
    $b=rand(-100,100);
    echo "<br>a-b=$a-$b=|" . ($a-$b) . "|=" . abs($a-$b);
}
$arr5 = array();
for($i = 0;$i<10;$i++) {
    array_push($arr5, rand(-40, 20));
}
foreach ($arr5 as &$item) {
    echo $item . " ";
    if($item < 0)
        $item = abs($item);
}

$choose = rand(1,100);

echo "<br>Number is  - $choose<br>";

$Divisors = array();
    for($i = 1;$i <= $choose;$i++)
{
    if($choose % $i == 0){
        array_push($Divisors, $i);
        echo $i . " ";
    }
}
$arrayT = array( 1,2,3,4,5,6,7,8,9,10 );
$cntr = 0;
$SuM = 0;
while ($SuM < 10){
    $SuM += $arrayT[$cntr];
    $cntr ++;
}
