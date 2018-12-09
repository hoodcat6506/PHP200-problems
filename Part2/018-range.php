<?php
/**
 * array range ( mixed $start , mixed $end [, number $step = 1 ] )
 *
 * start 첫번째 값
 * end 두번째 값
 * step 숫자로 건너뛰는 값을 얘기함
 */
$num = range(1, 10);

echo '<pre>' . PHP_EOL;
var_dump(range(1, 10));
echo '</pre>' . PHP_EOL;

echo '<pre>' . PHP_EOL;
var_dump(range(10, 1, 3));
echo '</pre>' . PHP_EOL;

echo '<pre>' . PHP_EOL;
var_dump(range(1, 10, 4));
echo '</pre>' . PHP_EOL;

echo '<pre>' . PHP_EOL;
var_dump(range(10, 1, -1));
echo '</pre>' . PHP_EOL;

echo '<pre>' . PHP_EOL;
var_dump(range('A', 'z'));
echo '</pre>' . PHP_EOL;
