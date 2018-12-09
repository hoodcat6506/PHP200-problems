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
    echo "이름: {$member['name']}<br>" . PHP_EOL;
    echo "ID: {$member['id']}<br>" . PHP_EOL;
    echo '<br>'.PHP_EOL;
    echo '<br>'.PHP_EOL;
}
