<?php
$dr = array();
$dr['continent'] = array();

$dr['continent']['america'] = array();
$dr['continent']['america'][0] = '애너하임';
$dr['continent']['america'][1] = '올랜도';

$dr['continent']['asia'] = array();
$dr['continent']['asia'][0] = '우리야스';
$dr['continent']['asia'][1] = '홍콩';
$dr['continent']['asia'][2] = '상하이';

$dr['continent']['europe'] = array();
$dr['continent']['europe'][0] = '파리';

echo '다음 도시의 공통점은?';
echo '<br><br>' . PHP_EOL;

echo '아메리카: ';
echo '<br>' . PHP_EOL;
echo $dr['continent']['america'][0];
echo '<br>' . PHP_EOL;
echo $dr['continent']['america'][1];
echo '<br><br>' . PHP_EOL;

echo '아시아: ';
echo '<br>' . PHP_EOL;
echo $dr['continent']['asia'][0];
echo '<br>' . PHP_EOL;
echo $dr['continent']['asia'][1];
echo '<br>' . PHP_EOL;
echo $dr['continent']['asia'][2];
echo '<br><br>' . PHP_EOL;

echo '유럽: ';
echo '<br>' . PHP_EOL;
echo $dr['continent']['europe'][0];
echo '<br><br>' . PHP_EOL;
