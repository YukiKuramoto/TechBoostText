<?php
$height = 210;
if ($height < 160) {
  echo "ご乗車になれません" . "\n";
} else if ($height > 200) {
  echo "200cm以上の方はご乗車になれません" . "\n";
} else {
  echo "ご乗車になれます" . "\n";
}

$weekday = "月曜";
switch ($weekday) {
  case "月曜":
  case "木曜":
    echo "可燃ごみの日です。" . "\n";
    break;
  case "水曜":
    echo "資源ごみの日です。" . "\n";
    break;
  default:
    echo "回収はありません" . "\n";
    break;
}

$a = 3;
$b = 3;
$c = "3";

var_dump($a == $b);
var_dump($a != $b);
var_dump($a > $b);
var_dump($a == $c);
var_dump($a === $c);

for ($i = 1; $i < 10; $i++){
  echo $i;
}
echo "\n";

$total = 0;
echo $total . "\n";

for ($i = 1; $i < 100; $i++){
  $total += $i;
}
echo $total . "\n";

$fruits = array("apple", "orange", "lemon");

echo count($fruits) . "\n";

for ($i = 0; $i <= 2; $i++){
  echo $fruits[$i] . "\n";
}

foreach($fruits as $fruit){
  echo $fruit . "\n";
}
 ?>
