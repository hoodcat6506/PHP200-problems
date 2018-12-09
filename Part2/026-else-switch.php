<?php
$gender = 'woman';
$likePlace = 'Universal Studio';

if ($gender == 'man') {
    echo 'only woman';
} else switch ($likePlace) {
    case 'disneyland':
        echo '디즈니랜드를 좋아합니다.';
        break;
    case 'disneyea':
        echo '디즈니씨를 좋아합니다.';
        break;
    case 'Universal Studio':
        echo '유니버설 스튜디오를 좋아합니다.';
        break;
    default:
        echo '아무것도 좋아하지 않습니다.';
        break;
}
