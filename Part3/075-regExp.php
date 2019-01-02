<?php
/**
 * 영문 대문자 검사
 *
 * preg_match VS ;preg_match_all
 * preg_match는 문자열에 패턴과 매칭되는 문자열이 하나라도 있으면 탐색을 중단한다.(1차원 배열 반환)
 * preg_match_all는 문자열에 패턴과 매칭되는 문자열이 있어도 계속해서 탐색한다.(2차원 배열 반환)
 */
$pattern = "/<[^>]+>(.*)<\/[^>]+>/U";
$pattern = "/[A-Z]{2,4}/";

$str = '<b>example: </b><div align=left>this is a test</div>';
$str = 'ABCD EFGH IJKL MNOP QRST UVWX YZ';

if (preg_match($pattern, $str, $matches)) {
    echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다. ";
    echo "<pre>";
    var_dump($matches);
    echo "</pre>";
} else {
    echo "값에 영문 대문자 외의 문자가 있는지 확인 요망";
}

if (preg_match_all($pattern, $str, $matches)) {
    echo "값 {$str}은(는) 정규식 표현에 적합한 값입니다. ";
    echo "<pre>";
    var_dump($matches);
    echo "</pre>";
} else {
    echo "값에 영문 대문자 외의 문자가 있는지 확인 요망";
}
