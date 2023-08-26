<?php


//$y = 1;
//$fn1 = fn($x) => $x + $y;
//echo $fn1(3);

function test (int $x): int{
  return $x++;
}
echo test(11);