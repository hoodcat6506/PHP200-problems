<?php

/**
 * 정규표현식
 *
 * PHP에서 정규표현식은 문자열의 양 끝을 슬래시로 감쌓면("/ /") 그 문자열은 정규표현식이라고 알려준다.
 * 예) ("/^[a-zA-Z]{3}$/")
 *
 * preg_match() 라는 내장함수가 있다. 이 함수는 정규표현식과 문자열을 매칭하는 함수이다.
 *
 * int preg_match ( string $pattern , string $subject [, array &$matches [, int $flags = 0 [, int $offset = 0 ]]] )
 * 문자열과 정규식이 매칭이 되면 1을 반환 아니면 0을 반환하며,
 * matches 인자를 넘겨주면 일치하는 정규식과 매칭된 문자열을 matches에 담는다.
 *
 * 4번째 인자 flag는 다음과 같은 값이 있다.
 * PREG_OFFSET_CAPTURE    : 이 flag를 넣을 경우 매칭이되면 매칭이 발생한 offset을 같이 반환한다.
 *                          └ matches가 2차원 배열이 되면서, 각 매칭된 문자열과 offset이 하나의 배열로 묶여서 반환된다.
 * PREG_UNMATCHED_AS_NULL : 서브패턴이 매칭되지 않으면 null로 반환한다. 이 flag를 넣지 않으면 빈 문자열을 반환한다. <- 7.2부터 생겼다.
 *
 * 5번째 인자 offset은 정규식을 매칭시킬 문자열의 위치를 지정할 수 있다. 일반적으로는 처음부터 매칭시키니 별로 쓰이질 않는다.
 * 개인적으로 봤을 땐 이상한거 같다.
 */

$pattern = '/^i$/';
$str = 'i';
$matches = array();

// if (preg_match($pattern, $str, $matches) === 1) {
//     echo "값 {$str}은 정규표현에 적합한 값입니다.";
//     echo "<pre>";
//     var_dump($matches);
//     echo "</pre>";
// } else {
//     echo "이름에 특수문자, 한글 또는 숫자가 있는지 확인 요망";
// }

$pattern = '/^(foo)(bar)(baz)$/';
$strArray = [
    'foobarbaz'
];

foreach ($strArray as $str) {
    echo "$str" . PHP_EOL;

    echo 'no flag<br/>' . PHP_EOL;
    $matches = [];
    preg_match($pattern, $str, $matches);
    var_dump($matches);
    echo '<br/>' . PHP_EOL;
    
    echo 'PREG_OFFSET_CAPTURE' . PHP_EOL;
    $matches = [];
    preg_match($pattern, $str, $matches, PREG_OFFSET_CAPTURE);
    var_dump($matches);
    echo '<br/>' . PHP_EOL;
    
    echo 'PREG_OFFSET_CAPTURE<br/>' . PHP_EOL;
    $matches = [];
    preg_match($pattern, $str, $matches, PREG_OFFSET_CAPTURE);
    var_dump($matches);
    echo '<br/>' . PHP_EOL;
    
    echo 'PREG_OFFSET_CAPTURE | PREG_UNMATCHED_AS_NULL<br/>' . PHP_EOL;
    $matches = [];
    preg_match($pattern, $str, $matches, PREG_OFFSET_CAPTURE | PREG_UNMATCHED_AS_NULL);
    var_dump($matches);
    echo '<br/>' . PHP_EOL;
}
