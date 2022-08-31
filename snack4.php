<?php 

$random_numbers = [];

while (count($random_numbers) < 15) {

  $number = rand(1, 100);
  if (!in_array($number, $random_numbers)) $random_numbers[] = $number;

}

var_dump($random_numbers);

?>