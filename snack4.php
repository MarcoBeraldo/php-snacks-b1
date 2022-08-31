<?php 

$numbers = [];

while (count($numbers) < 15) {

  $rand_num = rand(1, 100);
  if (!in_array($rand_num, $numbers)) $numbers[] = $rand_num;

}

var_dump($numbers);

?>