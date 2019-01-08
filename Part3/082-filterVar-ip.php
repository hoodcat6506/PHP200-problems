<?php
/**
 * filter_var()를 이용한 IP 유효성 검사
 */
function isIP($sIP)
{
    return (filter_var($sIP, FILTER_VALIDATE_IP) !== false) ? true : false;
}

$sIP = '192.168.0.1';
if (isIP($sIP) === true) {
    echo "{$sIP}는 올바른 IP입니다.";
} else {
    echo "{$sIP}는 잘못된 IP입니다.";
}

echo '<br>' . PHP_EOL;

$sIP = '0.0.0.0';
if (isIP($sIP) === true) {
    echo "{$sIP}는 올바른 IP입니다.";
} else {
    echo "{$sIP}는 잘못된 IP입니다.";
}

echo '<br>' . PHP_EOL;

$sIP = '255.255.255.255';
if (isIP($sIP) === true) {
    echo "{$sIP}는 올바른 IP입니다.";
} else {
    echo "{$sIP}는 잘못된 IP입니다.";
}

echo '<br>' . PHP_EOL;

$sIP = '256.256.256.256';
if (isIP($sIP) === true) {
    echo "{$sIP}는 올바른 IP입니다.";
} else {
    echo "{$sIP}는 잘못된 IP입니다.";
}
