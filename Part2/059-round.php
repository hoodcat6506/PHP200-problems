<?php
/**
 * float round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] )
 *
 * 실수를 반올림 한다.
 */
$num = 16.78;
$round = round($num, 1);
echo $round;
