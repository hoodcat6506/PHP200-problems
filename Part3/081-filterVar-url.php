<?php
/**
 * filter_var()을 이용한 URL 유효성 검사
 * 결과만 보면 프로토콜만 있으면 URL 취급을 하는거 같다...
 */
function isURL($sURL)
{
    return (filter_var($sURL, FILTER_VALIDATE_URL) !== false) ? true : false;
}

// http 프로토콜 있음
$sURL = 'http://www.tomodevel.jp';

if (isURL($sURL) === true) {
    echo "{$sURL}은 올바른 URL 입니다.";
} else {
    echo "{$sURL}은 잘못된 URL 입니다.";
}

echo '<br>' . PHP_EOL;

// 프로토콜 없음
$sURL = 'www.everdevel.com';
if (isURL($sURL) === true) {
    echo "{$sURL}은 올바른 URL 입니다.";
} else {
    echo "{$sURL}은 잘못된 URL 입니다.";
}

echo '<br>' . PHP_EOL;

// https 프로토콜
$sURL = 'https://www.everdevel.com';
if (isURL($sURL) === true) {
    echo "{$sURL}은 올바른 URL 입니다.";
} else {
    echo "{$sURL}은 잘못된 URL 입니다.";
}

echo '<br>' . PHP_EOL;

// www 없음
$sURL = 'https://everdevel.com';
if (isURL($sURL) === true) {
    echo "{$sURL}은 올바른 URL 입니다.";
} else {
    echo "{$sURL}은 잘못된 URL 입니다.";
}

echo '<br>' . PHP_EOL;

// 프로토콜만 있음
$sURL = 'https://google';
if (isURL($sURL) === true) {
    echo "{$sURL}은 올바른 URL 입니다.";
} else {
    echo "{$sURL}은 잘못된 URL 입니다.";
}
