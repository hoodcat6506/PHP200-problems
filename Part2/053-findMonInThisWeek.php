<?php

/**
 * 특정 날짜가 있는 주의 월요일 날짜 구하기
 */
$year = 2019;
$month = 3;
$day = 31;

$targetDateTimeStamp = mktime(0, 0, 0, $month, $day, $year);

$dayOfWeek = date('w', $targetDateTimeStamp);

$secondOfOneDay = 24 * 60 * 60;

switch ($dayOfWeek) {
    case 0:
        $monday = $targetDateTimeStamp + $secondOfOneDay;
        $friday = $targetDateTimeStamp + ($secondOfOneDay * 5);
        break;
    case 1:
        $monday = $targetDateTimeStamp;
        $friday = $targetDateTimeStamp + ($secondOfOneDay * 4);
        break;
    case 2:
        $monday = $targetDateTimeStamp - $secondOfOneDay;
        $friday = $targetDateTimeStamp + ($secondOfOneDay * 3);
        break;
    case 3:
        $monday = $targetDateTimeStamp - ($secondOfOneDay * 2);
        $friday = $targetDateTimeStamp + ($secondOfOneDay * 2);
        break;
    case 4:
        $monday = $targetDateTimeStamp - ($secondOfOneDay * 3);
        $friday = $targetDateTimeStamp + ($secondOfOneDay * 1);
        break;
    case 5:
        $monday = $targetDateTimeStamp - ($secondOfOneDay * 4);
        $friday = $targetDateTimeStamp;
        break;
    case 6:
        $monday = $targetDateTimeStamp - ($secondOfOneDay * 5);
        $friday = $targetDateTimeStamp - $secondOfOneDay;
        break;
}

if (isset($monday) === true && isset($friday) === true) {
    echo "{$year}년 {$month}월 {$day}일이 있는 주의 월요일과 금요일의 날짜";
    echo '<br>' . PHP_EOL;
    echo "월요일: " . date('Y-m-d', $monday);
    echo '<br>' . PHP_EOL;
    echo "금요일: " . date('Y-m-d', $friday);
} else {
    echo '월요일 부터 금요일의 날짜를 입력하세요';
}
