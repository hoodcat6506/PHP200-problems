<?php
$memberList = [
    [
        'name' => '미우',
        'id' => 'miu'
    ],
    [
        'name' => '유나',
        'id' => 'yuna'
    ],
    [
        'name' => '민후',
        'id' => 'minhoo'
    ],
    [
        'name' => '해윤',
        'id' => 'haeyun'
    ]
];

foreach ($memberList as $member) {
    foreach ($member as $key => $value) {
        echo "인덱스 {$key}의 값: {$value}";
        echo '<br>' . PHP_EOL;
    }
    echo '<br>' . PHP_EOL;
}
