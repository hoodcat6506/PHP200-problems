<?php
/**
 * mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )
 *
 * 문자열의 특정 단어를 바꾸는 함수
 */
$str = 'welcome to everdevel';

$changeWord = str_replace('everdevel', 'beanscent', $str);
echo $changeWord;
