<?php
/**
 * 문자열의 숫자가 섞여있는 경우, 문자열 시작이 숫자면
 * 그 부분만 integer로 캐스팅된다.
 */

// 시작이 숫자
$str = '123문자열';
echo "데이터형 변경 전의 데이터형 " . gettype($str) . '<br>' . PHP_EOL;

$str = (int)$str;
echo "데이터형 변경 전의 데이터형 " . gettype($str) . "값은 {$str}" . '<br>' . PHP_EOL;

// 시작이 문자
$str = '문자열154';
echo "데이터형 변경 전의 데이터형 " . gettype($str) . '<br>' . PHP_EOL;

$str = (int)$str;
echo "데이터형 변경 전의 데이터형 " . gettype($str) . "값은 {$str}" . '<br>' . PHP_EOL;

// 양끝으로
$str = '458문자열154';
echo "데이터형 변경 전의 데이터형 " . gettype($str) . '<br>' . PHP_EOL;

$str = (int)$str;
echo "데이터형 변경 전의 데이터형 " . gettype($str) . "값은 {$str}" . '<br>' . PHP_EOL;
