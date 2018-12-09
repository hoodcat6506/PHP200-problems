<?php

/**
 * getdate() 현재 시간의 정보를 배열로 받는다.
 */

$currentTime = getdate();
foreach ($currentTime as $key => $value) {
    echo "{$key} : {$value}<br>" . PHP_EOL;
}
