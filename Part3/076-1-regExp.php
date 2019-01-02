<?php
/**
 * 소문자로만 이루어진 문자인지 체크
 */
$sPattern = '/^[a-z]+$/';
$sString = 'abcdefghijklmnopqrstuvwxyz';

if (preg_match($sPattern, $sString, $aMatches) === 1) {
    var_dump($aMatches);
} else {
    echo 'not matched';
}
