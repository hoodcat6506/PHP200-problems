<?php
/**
 * filter_var()를 이용한 실수 유효성 체크
 * 정수도 실수 취급한다.
 */

$isFloat = function ($mValue) {
    $bResult = (filter_var($mValue, FILTER_VALIDATE_FLOAT) !== false) ? true : false;

    if ($bResult === true) {
        echo "{$mValue}는 실수입니다.";
    } else {
        echo "{$mValue}는 실수가 아닙니다.";
    }

    echo '<br>' . PHP_EOL;
};

$isFloat(19);
$isFloat(19.13);
$isFloat(19 / 2);
$isFloat(19.0);
$isFloat('19.10');
$isFloat('19');
$isFloat('hello');
$isFloat('true');
$isFloat(true);
