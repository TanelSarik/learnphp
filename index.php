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
    public function __toString(){
        return 'im a box';
    }

    public function __destruct(){
        var_dump('object was destroyed');
    }

    public function __get($name){
        var_dump("trying to get $name");
        return 'some cool value';
    }

     public function __set($name,$value){
        var_dump("trying to get $name with value $value");
        
    }

    public function __call($name, $args){
        var_dump("trying to call function $name with values", $args);
    }
    public static function __callstatic($name, $args){
        var_dump("trying to call function $name with values", $args);
    }

    public function __invoke(...$args){
      var_dump('i was called as function with args', $args);
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
       use Colorful; 


    public $material = 'Iron';
    public $weightPerUnit = 3;
}
class Cat{
    use Colorful, Smelly;
}

trait Colorful {
    public $color;

    public function setColor(){
        $this->color = $color;
    }
} 

trait Smelly {
    public $smell;
}


function makeBox(){
    
    $box1 = new Box();
    var_dump($box1->potato);
    $box-> hallo = 123;
    $box->hello(1, 2, 3);
    $box1(1, 2, 3, 4, 5);
    echo $box1;

}

makeBox();
//unset($box1);
$box1 = 1;
var_dump('end of problem');