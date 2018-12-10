<?php
/**
 * bool checkdate ( int $month , int $day , int $year )
 *
 * 유효한 날짜인지를 체크하는 함수이다.
 */
$isDateCheck = checkdate(2, 29, 2019);

if ($isDateCheck === true) {
    echo "유효한 날짜입니다.";
} else {
    echo "유효하지 않은 날짜입니다.";
}
