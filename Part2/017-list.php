<?php

/**
 * list() 함수는 입력으로 받은 각 변수에 배열의 값을 대입시켜 출력하는 함수이다.
 */
$fruit = array();
$fruit = ['grape', 'strawberry', 'apple'];

list($first, $second, $third) = $fruit;
echo $first . '<br>' . PHP_EOL;
echo $second . '<br>' . PHP_EOL;
echo $third . '<br>' . PHP_EOL;

/**
 * PHP5과 PHP7의 차이
 *
 * list()에 배열의 요소를 넣으면 들어가는 순서가 다르다.
 * PHP5: 오른쪽에서 왼쪽
 * PHP7: 왼쪽에서 오른쪽
 *
 * 5는 'third' -> 'second' -> 'first' 순으로 $a로 들어가고
 * 7은 'first' -> 'second' -> 'third' 순으로 $a로 들어간다.
 * 키와 값은 동일하게 매칭되니, 순서만 주의하면 된다.
 */

$info = array('coffee', 'brown', 'caffeine');

list($a['fisrt'], $a['second'], $a['third']) = $info;

var_dump($a);
foreach ($a as $key => $value) {
    echo "{$key}: {$value}";
    echo '<br>' . PHP_EOL;
}

/**
 * 키 값이 인덱스여야만 한다. 문자열이면 예외를 발생시킨다.
 * list() 함수자체가 인덱스를 기준으로 하는 함수같음.
 * TODO, 확인
 * 7.1 이전 버전에서는 0부터 시작하는 인덱스를 가지는 배열에서만 작동했다.
 *
 * 아래 코드는 7.1 이후부터 정상적으로 작동한다.
 */

/*
list(1 => $second, 3 => $fourth) = [1, 2, 3, 4];
echo "$second, $fourth";
echo $third . '<br>' . PHP_EOL;

$fruitWithColor = [
    'red' => 'apple',
    'yellow' => 'banana',
    'green' => 'melon'
];

list('red' => $red, 'green' => $green) = $fruitWithColor;
echo "$red, $green";
echo $third . '<br>' . PHP_EOL;
 */
