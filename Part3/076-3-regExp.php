<?php
/**
 * 문자로만 이루어진 문자열(공백 추가)
 */
$sPattern = '/^[A-Za-z가-힣 .]+$/';
$sString = '안녕하세요. a.b. C. De. f';

if (preg_match($sPattern, $sString, $aMatches) === 1) {
    var_dump($aMatches);
} else {
    echo "not matched";
}
