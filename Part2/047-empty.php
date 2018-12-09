<?php
/**
 * bool empty ( mixed $var )
 *
 * 해당 변수가 비어있는지 아닌지를 판단한다.
 * 5.5 이전에는 오직 변수만 받았지만 지금은 아니다.
 * 변수가 아닌 값이 들어가면 parse 에러를 내보냈다고 한다. (empty(trim($str)) === false)
 *
 * empty가 true를 반환하는 경우
 *
 * "" (빈 문자열)
 * 0 (0 정수값)
 * 0.0 (0 실수값)
 * "0" (0 문자열)
 * null
 * false
 * array() (빈 배열)
 */
$var = '';
echo '값이 빈 문자열인 경우: ';
var_dump(empty($var));

$var = null;
echo '값이 null인 경우: ';
var_dump(empty($var));

$var = array();
echo '값이 빈 배열인 경우: ';
var_dump(empty($var));

$var = 0;
echo '값이 int 0인 경우: ';
var_dump(empty($var));

$var = '0';
echo '값이 string 0인 경우: ';
var_dump(empty($var));

$var = 'string';
echo '값이 string인 경우: ';
var_dump(empty($var));
