<?php
/**
 * 디렉토리
 */
$sFolderName = 'hello';
$isDir = is_dir($sFolderName);

if ($isDir === true) {
    echo "{$sFolderName} 폴더가 존재합니다.";
} else {
    echo "{$sFolderName} 폴더가 존재하지 않습니다.";
}

echo '<br>' . PHP_EOL;

$sFolderName = 'world';
$isDir = is_dir($sFolderName);

if ($isDir === true) {
    echo "{$sFolderName} 폴더가 존재합니다.";
} else {
    echo "{$sFolderName} 폴더가 존재하지 않습니다.";
}
