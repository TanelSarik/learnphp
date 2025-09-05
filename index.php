<?php
 
class box {
    public $height;
    public $width;
    public $lenght;

    public function volume (){
        return $this->height * $this->width * $this->lenght;
    }
}

$box1 = new box();
$box1->height = 10;
$box1->lenght = 10;
$box1->width = 10;
$volume = $box1->volume();
var_dump($box1);
var_dump($volume);
var_dump($box1->volume());

$box2 = new box ();
$box2->height = 50;
$box2->lenght = 60;
$box2->width = 40;
$volume = $box2->volume();
var_dump($box2);
var_dump($box1);


