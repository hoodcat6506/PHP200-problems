<?php
/**
 * bool settype ( mixed &$var , string $type )
 *
 * 타입 형변환을 시켜주는 함수이다. 성공시 true, 실패시 false를 반환한다.
 *
 * type으로 올 수 있는 문자열은 다음과 같다.
 *
 * "boolean" or "bool"
 * "integer" or "int"
 * "float" or "double"
 * "string"
 * "array"
 * "object"
 * "null"
 */
$val = 'true';
echo '변수 val의 데이터형: ' . gettype($val);
echo '<br>' . PHP_EOL;
var_dump($val);

settype($val, 'boolean');

echo '변수 val의 데이터형: ' . gettype($val);
echo '<br>' . PHP_EOL;
var_dump($val);
