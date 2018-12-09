<?php

/**
 * 상수는 한 번 대입을 하면 다른 값을 대입해도 값이 바뀌지 않는다.
 */
define("FAVORITE_DOLL", "gelatoni");
echo "상수 FAVORITE_DOLL의 값은 " . FAVORITE_DOLL . '<br>';

define("FAVORITE_DOLL", "duffy");
echo "상수 FAVORITE_DOLL의 값은 " . FAVORITE_DOLL . '<br>';

/**
 * const vs define()
 *
 * 근본적인 차이는 const는 컴파일시간에 값을 대입하고, define()은 런타임시간에 값을 대입한다.
 * 이것이 const가 define()보다 좋은 이점이다.
 * 단점은 const는 컴파일시간에 대입을 하기에 조건부 실행하는 쪽에 선언할 수가 없다.
 * 또한 5.6 이전에는 const에 표현식을 사용할 수 가 없었다.
 */

 // 5.6 이전에는 에러다.
const ONE_PLUS_ONE = 1 + 1;
if (defined('MY_CONSTANT') === false) {
    // error
    // const MY_CONSTNAT = 'jeongjae';
    define('MY_CONSTANT', 'Jeongjae');
}
echo ONE_PLUS_ONE;
echo '<br>';
echo MY_CONSTANT;
