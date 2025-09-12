<?php
 
class box {
    public $height = 0;
    private $width = 0;
    protected $lenght = 0;
    
public static $count = 0;

public static function cool(){
    var_dump(self::$count);
    var_dump(static::class);
}

    public function __construct($height=0,$width=10,$lenght=0) {
        self::$count++;
        $this->height = $height;
        $this->width = $width;
        $this->height = $height;
    }
     public function test(){
        var_dump($this->width);
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

class MetalBox extends box {
      public $material = 'Metal';
      public $weightPerUnit = 2;

      public function test(){
        var_dump($this->width);
      }

      public function mass(){
        return $this->volume() * $this->weightPerUnit;
      }
}

class IronBox extends MetalBox {
    public $material = 'Iron';
    public $weightPerUnit = 3;
}

 box::$count = 1;
var_dump($box1::$count);

box::$count = 2;
var_dump(box::$count);

var_dump(box::$count);
var_dump(Metalbox::$count);
var_dump(Box::class);
Box::cool();

MetalBox::cool();