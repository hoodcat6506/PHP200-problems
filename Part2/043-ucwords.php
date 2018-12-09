<?php

/**
 * string ucwords ( string $str [, string $delimiters = " \t\r\n\f\v" ] )
 *
 * 영어단어의 첫글자를 대문자로 만들어준다.
 * 단어의 구분은 \t\r\n\f\v 와 같은 기본 구분자가 들어간다.
 *
 * delimiters는 5.4부터 추가되었다.
 */
$str = 'everdevel, tomodevel, startwebcoding';
echo ucwords($str);

echo '<br>' . PHP_EOL;

$str = 'everdevel| tomodevel| startwebcoding';
echo ucwords($str, ' |');
