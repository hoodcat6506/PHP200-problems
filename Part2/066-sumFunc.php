<?php
/**
 * parameter(매개 변수)와 argument(매개 값)
 * 흔히 parameter는 함수를 정의할 때 값을 받을 수 있도록 선언한 변수를 지칭하고
 * argument는 그 변수에 넣는 값을 지칭한다.
 */

// $num1, $num2 는 parameter
function sum($num1, $num2)
{
    $sum = $num1 + $num2;
    return $sum;
}

// 5, 10 은 argument
sum(5, 10);
