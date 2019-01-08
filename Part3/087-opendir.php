<?php
/**
 * 디렉토리를 여는 함수이다. window 환경에서는 해당 디렉토리가 없을 시 warning을 띄운다.
 *
 * resource opendir ( string $path [, resource $context ] )
 */
$sFolderName = 'hello';
$opendir = opendir($sFolderName);

if ($opendir) {
    echo "{$sFolderName} 폴더를 열었습니다.";
} else {
    echo "{$sFolderName} 폴더를 여는데 실패했습니다.";
}

echo '<br>' . PHP_EOL;

$sFolderName = 'world';
$opendir = opendir($sFolderName);

if ($opendir) {
    echo "{$sFolderName} 폴더를 열었습니다.";
} else {
    echo "{$sFolderName} 폴더를 여는데 실패했습니다.";
}
