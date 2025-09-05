<?php
 
function sayHello(){
    var_dump('Hello');
}

sayHello();

Function sayHelloToMe($name='Nameless'){
      var_dump("Hello $name!");
}

sayHelloToMe('tanel');
sayHelloToMe('devin');
sayHelloToMe('peeterl');

function sayNameandAge($name, $age){
    var_dump("Your NAme IS $name and your are $age years old");

}


sayNameandage('tanel',19);
sayNameandage('devin unc',100_000_000);

function recursion($i){
    if($i<10){
        var_dump($i);
        recursion($i+1);
    }
}


recursion(0);



