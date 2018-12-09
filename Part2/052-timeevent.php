<?php
/**
 * time()과 mktime()을 이용한 특정시간 동안에 작동가능하게 만든 로직
 */
$startTime = mktime(22, 50, 0);
$endTime = mktime(22, 53, 0);

$nowTime = time();

if ($nowTime >= $startTime && $nowTime <= $endTime) {
    echo "현재 이벤트에 참여할 수 있는 시간입니다.";
} else {
    echo "현재 이벤트에 참여할 수 없는 시간입니다.";
}
