<?php
/**
 * Super Global 변수 중 하나인 $_SERVER 에 관한 예제
 *
 * Super Global 변수 PHP 자체적으로 내장된 변수며 데이터형(type)은 배열이다.
 */
echo 'DOCUMENT_ROOT is ' . $_SERVER['DOCUMENT_ROOT'] . '<br>' . PHP_EOL;
echo 'HTTP_ACCEPT_LANGUAGE is ' . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . '<br>' . PHP_EOL;
echo 'HTTP_HOST is ' . $_SERVER['HTTP_HOST'] . '<br>' . PHP_EOL;
echo 'HTTP_USER_AGENT is ' . $_SERVER['HTTP_USER_AGENT'] . '<br>' . PHP_EOL;
echo 'SERVER_PORT is ' . $_SERVER['SERVER_PORT'] . '<br>' . PHP_EOL;
echo 'SCRIPT_NAME is ' . $_SERVER['SCRIPT_NAME'] . '<br>' . PHP_EOL;
echo 'REQUEST_URI is ' . $_SERVER['REQUEST_URI'] . '<br>' . PHP_EOL;
echo 'PHP_SELF is ' . $_SERVER['PHP_SELF'] . '<br>' . PHP_EOL;
echo 'QUERY_STRING is ' . $_SERVER['QUERY_STRING'] . '<br>' . PHP_EOL;
