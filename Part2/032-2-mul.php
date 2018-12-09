<?php
for ($i = 2; $i <= 3; $i++) {
    echo "{$i}단<br>" . PHP_EOL;
    for ($j = 2; $j < 10; $j++) {
        $result = $i * $j;
        echo "{$i} * {$j} = {$result}<br>" . PHP_EOL;
    }
    echo "<br>" . PHP_EOL;
}
