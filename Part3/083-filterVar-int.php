<?php

/**
 * filter_var를 이용한 정수 유효성 검사
 * is_numeric은 정수, 실수 둘 다 true이다.
 */
$isInt = function ($mValue) {
    $bResult = (filter_var($mValue, FILTER_VALIDATE_INT) !== false) ? true : false;

    if ($bResult === true) {
        echo "{$mValue}는 정수입니다.";
    } else {
        echo "{$mValue}는 정수가 아닙니다.";
    }

    echo '<br>' . PHP_EOL;
};

$isIntByIsNumeric = function ($mValue) {
    $bResult = is_numeric($mValue) ? true : false;

    if ($bResult === true) {
        echo "{$mValue}는 숫자입니다.";
    } else {
        echo "{$mValue}는 숫자가 아닙니다.";
    }

    echo '<br>' . PHP_EOL;
};

$isInt(684);
$isInt(1.24);
$isInt('hello');
$isInt('321');
$isInt(true);
$isInt(false);
$isInt('0.1.2.3.4');

$isIntByIsNumeric(684);
$isIntByIsNumeric(1.24);
$isIntByIsNumeric('hello');
$isIntByIsNumeric('321');
$isIntByIsNumeric(true);
$isIntByIsNumeric(false);
$isIntByIsNumeric('0.1.2.3.4');
