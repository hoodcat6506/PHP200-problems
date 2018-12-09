<?php
$double = 57.20;
echo "데이터형 변경 전의 데이터형 " . gettype($double) . '<br>' . PHP_EOL;

$double = (int)$double;
echo "데이터형 변경 전의 데이터형 " . gettype($double) . "값은 {$double}" . '<br>' . PHP_EOL;
