<?php
/**
 * mixed microtime ([ bool $get_as_float = FALSE ] )
 *
 * time()을 통해서 받은 타임스탬프는 밀리세컨드가 없다.
 * microtime() 함수를 쓰면 마이크로세컨드 값을 함께 얻을 수 있다.
 */
echo microtime();
echo '<br>' . PHP_EOL;

echo microtime(true);
