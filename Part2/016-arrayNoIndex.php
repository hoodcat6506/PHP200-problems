<?php

/**
 * 인덱스를 지정하지 않으면 순서데로 들어간다.
 */
$fruit = array();
$fruit = ['banana', 'water melon', 'grape', 'apple', 'mango']; // 이게 5.4부터 추가됐다고 하던데 그럼 이건 새로 정의하는거 아닌가..?

echo $fruit[0];
echo "<br>" . PHP_EOL;
echo $fruit[2];
