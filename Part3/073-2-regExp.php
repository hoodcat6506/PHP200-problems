<?php
/**
 * https://ko.wikipedia.org/wiki/%EC%A0%95%EA%B7%9C_%ED%91%9C%ED%98%84%EC%8B%9D
 *
 * 정규식에서 특수 문자들에 관한 예제인데 링크를 보는게 훨씬 빠르다.
 */
$pattern = '/^i+$/';

$str = 'ii';
$matches = array();

if (preg_match($pattern, $str, $matches) === 1) {
    echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다.<br/>" . PHP_EOL;
    echo "<pre>" . PHP_EOL;
    var_dump($matches);
    echo "</pre>" . PHP_EOL;
}
