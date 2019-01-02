<?php

/**
 * 이메일 유효성 체크
 */

$sPattern = "/^[a-zA-Z]{1}[a-zA-Z0-9.-_]+@[a-zA-Z0-9\-]+[a-z0-9]{1}\.(([a-z]{1}[a-z.]+[a-z]{1})|([a-z]+))$/";
$sEmail = 'thanatos0128@gmail.com';

if (preg_match($sPattern, $sEmail, $aMatches) === 1) {
    var_dump($aMatches);
} else {
    echo 'not matched';
}
