<?php

class Box {
    public $width;
    public $height;
    public $lenght;

    public function volume(){
        return $this->width * $this->height * $this->lenght;
    }
}

$num1 = 1;
$num2 = $num1;
$num2 = 2;
var_dump($num1);

$box1 = new Box();
$box1->width = 1;
$box2 = clone $box1;
$box2 ->width = 2;
var_dump($box1, $box2);
var_dump($box1->width);