<?php
/**
 * string ucfirst ( string $str )
 *
 * 영문자의 첫글자를 대문자로 바꿔준다.
 * 클래스명을 찾을 때 유용할 듯하다.
 */
$str = 'everdevel';
echo '첫 글자가 영문인 경우: ' . ucfirst($str);

echo '<br>' . PHP_EOL;

// strtolower()와 함께 쓰면 문장을 만들기 편하다.
$str = 'THIS IS ALL UPPERCASE STATEMENT.';
echo ucfirst(strtolower($str));
