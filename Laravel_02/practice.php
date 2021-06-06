<?php
$a = 3;
$b = 7;
echo $a + $b . "\n";

$integer = 10;
$string = "abc";
echo $string . "\n";

$new_integer = $integer + 10;
echo $new_integer . "\n";

$array = [2017, 2018, 2019, 2020];
echo $array[2] . "\n";

$array2 = ["spring", "summer", "autumn", "winter"];
echo $array2[1] . "\n";

$animals = [
  "cat" => "猫",
  "dog" => "犬",
  "bird" => "鳥"
];

echo $animals["cat"] . "\n";

$result = false;
if ($result == true) {
  echo "成功しました" . "\n";
} else {
  echo "失敗しました" . "\n";
}

$value = 6;
echo $value + 2 . "\n";

$value = 10;
$result = $value == 10;
var_dump($result);

$value = 10;
$value += 5;
echo $value;

$value = "apple";
$value .= "orange";
echo $value . "\n";

$value = 10;
$result = ($value < 20) ? '$valueは20より小さい':'$valueは20より大きい';
echo $result;
?>
