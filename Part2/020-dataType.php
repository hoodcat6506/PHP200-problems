<?php

/**
 * string gettype ( mixed $var )
 * $var의 변수 타입을 문자열로 반환한다.
 *
 * is_array() - 값이 배열인지 확인
 * is_bool() - 값이 부울인지 확인
 * is_callable() - Verify that the contents of a variable can be called as a function
 * is_float() - 값이 double인지 확인
 * is_int() - 값이 interger인지 확인
 * is_null() - 값이 null인지 확인
 * is_numeric() - 값이 숫자 혹은 숫자문자열인지 확인
 * is_object() - 값이 객체인지 확인
 * is_resource() - Finds whether a variable is a resource
 * is_scalar() - integer, double, string, boolean
 * is_string() - 값이 문자열인지 확인
 */
$num = 12;
echo '$num의 데이터 형(값 ' . $num . ')은' . gettype($num);
echo '<br>' . PHP_EOL;

$greeting = '안녕';
echo '$greeting의 데이터 형(값 ' . $greeting . ')은' . gettype($greeting);
echo '<br>' . PHP_EOL;

$numStr = '121212';
echo '$numStr의 데이터 형(값 ' . $numStr . ')은' . gettype($numStr);
echo '<br>' . PHP_EOL;

$fruit = array();
echo '$fruit의 데이터 형은' . gettype($fruit);
echo '<br>' . PHP_EOL;

$nai = null;
echo '$nai의 데이터 형(값 ' . $nai . ')은' . gettype($nai);
echo '<br>' . PHP_EOL;

$boolean = true;
echo '$boolean의 데이터 형(값 ' . $boolean . ')은' . gettype($boolean);
echo '<br>' . PHP_EOL;
