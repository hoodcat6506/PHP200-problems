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
        if ($key === 'name') {
            echo "{$value}님의 아이디는 ";
        } else {
            echo "{$value}입니다.<br>" . PHP_EOL;
        }
    }
    echo '<br>' . PHP_EOL;
}
