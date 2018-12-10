<?php
/**
 * 예제라서 정의와 호출을 같이했지만
 * PSR-1을 보면 정의(class, function, define 등등)와
 * 사이드이펙트를 일으키는 요소(호출, 출력 등등)를 한 파일에 두면 안된다.
 */
function outputHello()
{
    echo 'Hello, World';
}

outputHello();
