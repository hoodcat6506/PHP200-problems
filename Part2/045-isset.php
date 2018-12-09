<?php

/**
 * bool isset ( mixed $var [, mixed $... ] )
 *
 * 변수의 값이 설정되어 있는지 않되어있는지 확인한다.
 * 오직 변수만 들어가며, 이외의 값은 parse 에러를 발생시킨다. 상수가 정의되었는지는 defined() 함수를 통해 확인해야한다.
 * isset()은 '언어구조' 이지 함수가 아니기 때문에 그렇다.
 *
 * $var = null; 도 false이다.
 */
if (isset($str) === true) {
    echo "변수 str이 존재합니다";
} else {
    echo "변수 str이 존재하지 않습니다";
}

echo '<br>' . PHP_EOL;

$str = 'string';
if (isset($str) === true) {
    echo "변수 str이 존재합니다";
} else {
    echo "변수 str이 존재하지 않습니다";
}

echo '<br>' . PHP_EOL;

$oNull = null;
if (isset($oNull) === true) {
    echo "변수 oNull은 세팅되었습니다.";
} else {
    echo "변수 oNull은 세팅되지 않았습니다.";
}
