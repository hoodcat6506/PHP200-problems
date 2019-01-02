<?php

/**
 * 숫자 체크
 */
$sPattern = '/[0-9]+/';
$sString = 1234567;

if (preg_match($sPattern, $sString, $aMatches) === 1) {
    var_dump($aMatches);
} else {
    echo 'not matches';
}
