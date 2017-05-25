<?php

function isAlmostPalindrome($string) {
  $chars = str_split($string);
  $len = count($chars) - 1;
  $diff = 0;
  for ($i = 0; $i < floor(count($chars)/2); $i++) {
    if ($chars[$i] != $chars[$len - $i]) {
      $diff += 1;
    }
  }
  return ($diff <= 1) ? TRUE : FALSE;
}

echo isAlmostPalindrome('abdba') ? 'TRUE' : 'FALSE'; // true
echo PHP_EOL;
echo isAlmostPalindrome('abcdedcba') ? 'TRUE' : 'FALSE'; // true
echo PHP_EOL;

echo isAlmostPalindrome('abcddcba') ? 'TRUE' : 'FALSE'; // true
echo PHP_EOL;

echo isAlmostPalindrome('abceedcba') ? 'TRUE' : 'FALSE'; // true
echo PHP_EOL;

echo isAlmostPalindrome('abcddcba') ? 'TRUE' : 'FALSE'; // true
echo PHP_EOL;

echo isAlmostPalindrome('abcddcxx') ? 'TRUE' : 'FALSE';  // false
echo PHP_EOL;

echo isAlmostPalindrome('abcddxxx') ? 'TRUE' : 'FALSE';  // false
echo PHP_EOL;

echo isAlmostPalindrome('abcdedcxx') ? 'TRUE' : 'FALSE';  // false
echo PHP_EOL;


