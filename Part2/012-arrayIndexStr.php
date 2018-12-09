<?php
$earth = array();
/**
 * 자바의 HashMap 처럼 사용할 수 있다. 키 => 값
 */
$earth['nation'] = 'korea';
echo 'earth 배열의 nation 인덱스는 ' . $earth['nation'];
echo '<br>' . PHP_EOL;


/**
 * 키가 문자열인 배열의 순회
 */
$aPlanet = array(
    'first' => 'Mercurial',
    'second' => 'Vinus',
    'third' => 'Earth',
    'forth' => 'Mars'
);

foreach ($aPlanet as $key => $value) {
    echo $key . '\'s value: ' . $value;
    echo '<br>' . PHP_EOL;
}
