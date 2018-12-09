<?php
/**
 * int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [,
 *      int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )
 *
 * UNIX 타임스탬프를 만들어주는 함수이다.
 * 시, 분, 초, 월, 일, 년 순서로 입력한다.
 *
 * 5.1부터 매개 값을 넣어주지 않으면, E_STRICT 를 던진다. 현재 타임스탬프를 얻고 싶으면 time()을 사용하면 된다.
 */
echo "2020년 01월 01일 9시 15분 10초의 타임스탬프는? <br>" . PHP_EOL;
$timeStamp = mktime(9, 15, 10, 1, 1, 2020);
echo $timeStamp;

$timeStamp = mktime();
echo $timeStamp;
