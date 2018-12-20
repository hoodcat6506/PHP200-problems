<?php

/**
 * 정규표현식 한글 검사
 */

$pattern = "/^[가-힣]{3,}$/";

$str = '웹코딩시작하기';
$matches = array();

if (preg_match($pattern, $str, $matches) === 1) {
    echo "값 {$str}은 정규식에 적합한 값입니다.";
    echo '<pre>' . PHP_EOL;
    var_dump($matches);
    echo '</pre>' . PHP_EOL;
} else {
    echo "이름에 특수문자, 영문 또는 숫자가 있는지 확인 요망";
}
