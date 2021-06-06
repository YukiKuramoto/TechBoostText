<?php
function double($num){
  return $num * 2;
}

echo double(4) . "\n";

function sum($a, $b){
  return $a + $b;
}

echo sum(10, 13) . "\n";


function multiple($arr){
  $answer = 1;
  foreach($arr as $item){
    $answer *= $item;
  }
  return $answer;
}

$array = array(1, 3, 5 ,7, 9);
echo multiple($array) . "\n";



function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
sort($arr);
echo ($arr[0]) . "\n";
$max_number = $arr[0];
return $max_number;
}

$testArray = array(10,3,2,6,4,9,8,7);
echo max_array($testArray);


 ?>
