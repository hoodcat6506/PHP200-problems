<?php
/**
 * string -> integer 예제
 * 형변환은 (type) $var 이런식으로 하면된다.
 */
$str = "문자열";
echo "데이터형 변경 전의 데이터형 " . gettype($str) . '<br>' . PHP_EOL;

$str = (int)$str;
echo "데이터형 변경 전의 데이터형 " . gettype($str) . "값은 {$str}" . '<br>' . PHP_EOL;
