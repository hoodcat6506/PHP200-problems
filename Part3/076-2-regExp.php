<?php
/**
 * 문자로만 이루어진 문자열(공백 x)
 */
$sPattern = '/^[A-Za-z가-힣]+$/';
$sString = '안녕하세요abCDef';

if (preg_match($sPattern, $sString, $aMatches) === 1) {
    var_dump($aMatches);
} else {
    echo "not matched";
}
