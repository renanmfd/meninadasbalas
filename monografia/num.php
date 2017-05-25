<?php

function something(array $a, $n) {
  $aux = [];
  foreach ($a as $i) {
    //echo $i . ' ';
    if (!isset($aux[$i + ""])) {
      $aux[$i + ""] = 1;
    } else {
      $aux[$i + ""] += 1;
    }
  }

  reset($aux);
  $key = key($aux);
  $max = [$aux[$key], $key];

  foreach ($aux as $k => $v) {
    if ($v == $max[0] && intval($k) < intval($max[1])) {
      $max = [$v, $k];
    }
    if ($v > $max[0]) {
      $max = [$v, $k];
    }
  }
  return $max[1];
}

$t1 = [34,31,34,77,82];
$t2 = [22,101,102,101,102,525,88];
$t3 = [66];
$t4 = [14,14,2342,2342,2342];

echo something($t1, 5) . PHP_EOL;
echo something($t2, 7) . PHP_EOL;
echo something($t3, 1) . PHP_EOL;
echo something($t4, 5) . PHP_EOL;
