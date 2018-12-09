<?php

/**
 * int strlen ( string $string )
 * 문자열의 길이를 반환한다.
 */

$str = "beanscent";
echo "문자열의 길이: " . strlen($str);

echo '<br>' . PHP_EOL;

$str = ' b e a m s c e n t ';
echo "문자열의 길이: " . strlen($str);
