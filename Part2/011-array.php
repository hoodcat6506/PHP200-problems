<?php
$earth = array();
/**
 * 인덱스는 0부터 시작. 다른 언어들과 마찬가지다.
 */
$earth[0] = 'korea';
echo 'earth 배열의 0 인덱스는 ' . $earth[0];
echo '<br>' . PHP_EOL;

/**
 * 배열 인덱스 순회
 */
$aPlanet = array('Mercurial', 'Vinus', 'Earth', 'Mars');
for ($i = 0; $i < sizeof($aPlanet); $i++) {
    echo $i . ' 인덱스의 값: ' . $aPlanet[$i];
    echo '<br>' . PHP_EOL;
}

/**
 * 배열선언의 단축형이 5.4 부터 가능하다.
 */

$aMyArray = [];
if (is_array($aMyArray) === true) {
    echo 'this is array type';
}
