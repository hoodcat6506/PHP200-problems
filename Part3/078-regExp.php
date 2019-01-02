<?php
/**
 * 핸드폰 번호 찾기
 */

$sPattern = "/(010|011|016|017|019)-[^0][0-9]{3,4}-[0-9]{4}/";
$sPhoneNumbers = <<<'PHONE'
010-2953-8692
010-8933-8692
010-3953-8692
010-6963-8692
010-2913-8692
PHONE;

if (preg_match_all($sPattern, $sPhoneNumbers, $aMatches) !== 0) {
    var_dump($aMatches);
} else {
    echo 'not matched';
}
