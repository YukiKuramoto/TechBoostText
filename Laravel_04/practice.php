<?php

function sum($max){
  $result = 0;
  for($i = 1; $i <= $max; $i++){
    $result += $i;
  }
  return $result;
}

echo sum(50) . "\n";

function print_number(){
  for($i = 0; $i <= 100; $i++){
    echo $i . "\n";
  }
}

// echo print_number() . "\n";
 ?>
