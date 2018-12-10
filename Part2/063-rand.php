<?php
/**
 * int rand ( void )
 * int rand ( int $min , int $max )
 *
 * 두 개의 값을 넣으면 입력받은 두 값의 범위 안에서 임의의 정수를 반환한다.
 */
$randNum = rand(1, 3);
$kawibawibo = '';

switch ($randNum) {
    case 1:
        $kawibawibo = '가위';
        break;
    case 2:
        $kawibawibo = '바위';
        break;
    case 3:
        $kawibawibo = '보';
        break;
    default:
        break;
}

echo $kawibawibo;
