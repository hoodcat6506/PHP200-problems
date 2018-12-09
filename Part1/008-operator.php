<?php
// 덧셈
$add = 5 + 5;
echo "5 + 5 = {$add}";
echo '<br>' . PHP_EOL;

$sub = 5 - 2;
echo "5 - 2 = {$sub}";
echo '<br>' . PHP_EOL;

$mul = 5 * 5;
echo "5 * 5 = {$mul}";
echo '<br>' . PHP_EOL;

/**
 * / 의 결과는 항상 integer가 아니다.
 * intdiv()가 7.0 부터 추가되었다.
 */
$div = 6 / 4;
echo "6 / 4 = {$div}";
echo '<br>' . PHP_EOL;

$intDiv = intdiv(6, 4);
echo "intdiv(6, 4) = {$intDiv} (7.0부터 추가)";
echo '<br>' . PHP_EOL;

$mod = 5 % 2;
echo "5 % 2 = {$mod}";
echo '<br>' . PHP_EOL;

// 문자열은 그럼 어떨까??
$test = 4 + '10str';
echo $test;
echo '<br>' . PHP_EOL;

$test = 4 + 'str';
echo $test;
echo '<br>' . PHP_EOL;

$test = 4 + '1str15';
echo $test;
echo '<br>' . PHP_EOL;
