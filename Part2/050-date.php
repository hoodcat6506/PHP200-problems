<?php
/**
 * string date ( string $format [, int $timestamp = time() ] )
 *
 * 파싱되는 문자가 상당히 많은 값이 존재한다.
 * http://php.net/manual/en/function.date.php
 */
echo "현재 시간은 " . date('Y년 m월 d일 H시 i분 s초', time());
