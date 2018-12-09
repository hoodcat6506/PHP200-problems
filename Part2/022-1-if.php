<?php
$num1 = 4;
$num2 = 4;

if ($num1 === $num2) {
    echo '$num1과 $num2는 같다.';
    echo '<br>' . PHP_EOL;
}

$num3 = '4';

if ($num1 == $num3) {
    echo '== 연산자를 사용했을 때 ';
    echo '(' . gettype($num1) . ')$num1과 (' . gettype($num3) . ')$num3는 같다.';
    echo '<br>' . PHP_EOL;
} else {
    echo '== 연산자를 사용했을 때 ';
    echo '(' . gettype($num1) . ')$num1과 (' . gettype($num3) . ')$num3는 다르다.';
    echo '<br>' . PHP_EOL;
}

if ($num1 === $num3) {
    echo '=== 연산자를 사용했을 때 ';
    echo '(' . gettype($num1) . ')$num1과 (' . gettype($num3) . ')$num3는 같다.';
    echo '<br>' . PHP_EOL;
} else {
    echo '=== 연산자를 사용했을 때 ';
    echo '(' . gettype($num1) . ')$num1과 (' . gettype($num3) . ')$num3는 다르다.';
    echo '<br>' . PHP_EOL;
}
