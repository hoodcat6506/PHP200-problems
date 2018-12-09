<?php

/**
 * string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
 *
 * trim() 함수는 문자열 양 끝에 공백을 없애주는 함수이다.
 * ltrim() 함수는 문자열 왼쪽에 공백을 없애주는 함수이다.
 * rtrim() 함수는 문자열 오른쪽에 공백을 없애주는 함수이다.
 *
 * 공백 목록
 * " " (ASCII 32 (0x20)), 스페이스.
 * "\t" (ASCII 9 (0x09)), 탭.
 * "\n" (ASCII 10 (0x0A)), 개행.
 * "\r" (ASCII 13 (0x0D)), 캐리리턴.
 * "\0" (ASCII 0 (0x00)), null 바이트.
 */

$str = '                  공백을 없애줍니다.                       ';
echo trim($str) . '<br>' . PHP_EOL;

$str = '                  왼쪽공백을 없애줍니다.                       ';
echo ltrim($str) . '<br>' . PHP_EOL;

$str = '                  오른쪽공백을 없애줍니다.                       ';
echo rtrim($str) . '<br>' . PHP_EOL;

$str = "\t\n\r공백을 받으렴\t\n\r";
echo $str;
echo trim($str);
