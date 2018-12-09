<?php

/**
 * int strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
 *
 * 찾고자하는 문자열의 위치를 반환한다.
 * 찾고자하는 문자열이 없으면 false를 반환한다.
 */
$str = 'web development';
$findStr = 'd';
$pos = strpos($str, $findStr);

echo "문자열 {$findStr}의 위치: " . $pos;
