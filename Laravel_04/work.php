<?php
// 課題１
function double($num){
  return $num * 2;
}

echo double(4) . "\n";


// 課題２
function sum($a, $b){
  return $a + $b;
}

echo sum(10, 13) . "\n";


// 課題３
function multiple($arr){
  $answer = 1;
  foreach($arr as $item){
    $answer *= $item;
  }
  return $answer;
}

$array = array(1, 3, 5 ,7, 9);
echo multiple($array) . "\n";


// 課題４
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
rsort($arr);
$max_number = $arr[0];
return $max_number;
}

$testArray = array(10,3,2,6,4,9,8,7);
echo max_array($testArray) . "\n";


// 課題５
$text = "<p>tech boost</p>";
echo strip_tags($text . "\n");

$arr = array("orange", "apple");
array_push($arr, "grape");
print_r($arr);

$arr_int = array(1,2,3);
$arr_str = array("apple", "orange", "grape");
$arr_merged = array_merge($arr_int, $arr_str);
print_r($arr_merged);

echo time() . "\n";
$lastday = mktime(0, 0, 0, 3, 0, 2000);
echo strftime("Last day in Feb 2000 is: %d", $lastday) . "\n";
echo date("M-d-Y", mktime(0, 0, 0, 5, 1, 2021)) . "\n";
 ?>
