<?php
/**
 * require문은 현재파일에 다른파일을 불러오는 기능을 한다.
 *
 * include문과의 차이점
 *
 * include문은 해당 파일이 없으면 Warning을 내보내고 나머지가 실행되지만
 * require문은 해당 파일이 없으면 Fatal Error를 던지고 실행을 종료한다.
 */
require __DIR__ . '/070-1-include.php';
