<?php
/**
 * mkdir()을 이용한 폴더 생성
 *
 * bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = FALSE [, resource $context ]]] )
 */
$sFolderName = 'hello/world/jjpark';
$makeDir = mkdir($sFolderName, '660', true);
if ($makeDir) {
    echo "{$sFolderName} 폴더 생성 완료";
} else {
    echo "{$sFolderName} 폴더 생성 실패";
}
