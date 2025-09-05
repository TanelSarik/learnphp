<?php
 
class box {
    public $height = 0;
    private $width = 0;
    public $lenght = 0;

    public function __construct($height=0,$width=10,$lenght=0) {
        $this->height = $height;
        $this->width = $width;
        $this->height = $height;
    }

    public function setwidth($width){
        if(is_numeric($width) && $width > 0){
            $this->width = $width;
        }   else{
            throw new exception('Height needs to be number and bigger than 0');
        }
        
    }

    public function volume (){
        return $this->height * $this->width * $this->lenght;
    }
}

$box1 = new box(10, 10, 10);
$box1->setWidth(20);
$volume = $box1->volume();
var_dump($box1);
var_dump($volume);
var_dump($box1->volume());

$box2 = new box (30, 40 ,50 );
$volume = $box2->volume();
var_dump($box2);
var_dump($box1);


