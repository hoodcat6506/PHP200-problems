<?php
/**
 * string number_format ( float $number [, int $decimals = 0 ] )
 * string number_format ( float $number , int $decimals = 0 , string $dec_point = "." , string $thousands_sep = "," )
 *
 * 하나, 둘 혹은 네개의 인자를 받는다.
 * i) 하나만 입력받은 경우 - 천 단위로 ',' 를 표시한다.
 * ii) 둘을 입력받은 경우 - 천 단위로 ',' 를 표시해주며, 소수점을 몇 번째자리 까지 표시할 지 정한다.
 * iii) 넷을 입력받은 경우 - 천 단위로 나눌 문자를 변경할 수 있으며, 소수점 또한 변경 가능하다.
 */
$num = 123456789;
echo number_format($num);
echo '<br>' . PHP_EOL;

$num = 123456.789;
echo number_format($num);
echo '<br>' . PHP_EOL;

$num = 123456.789;
echo number_format($num, 1);
echo '<br>' . PHP_EOL;
