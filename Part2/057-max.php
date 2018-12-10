<?php

/**
 * mixed max ( array $values )
 * mixed max ( mixed $value1 [, mixed $... ] )
 *
 * 배열에서 가장 큰 수를 찾을 때 사용
 * 보통 숫자를 비교하겠지만, 문자열을 비교할 시에는 유니코드 값을 비교하는거 같다.
 */
$arr = range(1, 100);
echo '가장 큰 수 : ' . max($arr);

echo '<br>' . PHP_EOL;

$arr = range('A', 'z');
echo '문자열 가장 큰 수 : ' . max($arr);

echo '<br>' . PHP_EOL;

$arr = [
    '반갑습니다.',
    '안녕하세요',
    '뭐가 제일 클까요?',
    '내 알 바야...'
];
echo '문자열 가장 큰 수 : ' . max($arr);
