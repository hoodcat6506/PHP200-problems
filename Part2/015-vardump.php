<?php

/**
 * var_dump는 변수의 구조를 보여주는 함수이다.
 * 하나 혹은 그 이상의 변수를 주면, 그 구조와 값을 표시해준다.
 * 배열 혹은 객체처럼 순회가능한 구조들이면 들여쓰기를 해서 보여준다.
 *
 * 5.6부터는 객체에 __debugInfo()를 구현하지 않으면
 * public, private, protected 들이 모두 보여질 것이다.
 */
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

echo '<pre>';
var_dump($dr);
echo '</pre>';

class PropertyCheckClass
{
    private $sPrivate;
    protected $sProtected;
    public $spublic;

    public function __construct()
    {
        $this->sPrivate = 'this is private';
        $this->sProtected = 'this is protected';
        $this->spublic = 'this is public';
    }
}

/**
 * __debugInfo()를 구현안해서 모든 프로퍼티 정보가 다 보인다.
 */
echo '<pre>';
var_dump(new PropertyCheckClass());
echo '</pre>';

class PropertyCheckClass2
{
    private $sPrivate;
    protected $sProtected;
    public $spublic;
    
    public function __construct()
    {
        $this->sPrivate = 'this is private';
        $this->sProtected = 'this is protected';
        $this->spublic = 'this is public';
    }
    
    public function __debugInfo()
    {
        $aResult = array();
        array_push($aResult, $this->spublic, 'public만 보여지도록 했습니다.');
        
        return $aResult;
    }
}

/**
 * __debugInfo()를 구현하면 메소드의 반환값의 정보를 표시해준다.
 */
echo '<pre>';
var_dump(new PropertyCheckClass2());
echo '</pre>';
