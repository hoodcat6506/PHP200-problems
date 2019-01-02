<?php
/**
 * filter_var() 함수를 이용한 이메일 체크
 *
 * mixed filter_var ( mixed $variable [, int $filter = FILTER_DEFAULT [, mixed $options ]] )
 *
 * 두번째 인자로는 여러가지 필터가 있다.(http://php.net/manual/en/filter.filters.php)
 * 필터링된 값을 반환하며 필터링이 안되면 false를 반환한다.
 */
function checkEmail($sEmail)
{
    $mEmailCheck = filter_var($sEmail, FILTER_VALIDATE_EMAIL);

    if ($mEmailCheck !== false) {
        return true;
    }

    return false;
}

$sEmail = 'hoodcat6506@gmail.com';

if (checkEmail($sEmail) === true) {
    echo '이메일 맞음';
} else {
    echo '이메일 아님';
}
