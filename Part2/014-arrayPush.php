<?php

/**
 * 배열의 값 추가하기
 */

$aFruit = array();
array_push($aFruit, 'apple', 'banana', 'grape', 'coconut', 'tangerine');

foreach ($aFruit as $sFruit) {
    echo $sFruit . '<br>' . PHP_EOL;
}

$aFruitWithColor = array();
