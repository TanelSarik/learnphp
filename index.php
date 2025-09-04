<?php
$num = 5;
if($num > 5) {
    var_dump('bigger then 5');
 } elseif($num === 5)
      var_dump('equal then 5');
 else {
     var_dump('smaller then 5');
}

$day = (int) date('N', strtotime('04.09.2025'));
var_dump($day);

if($day ==1) {
    var_dump('esmaspäev');
}   else if ($days == 2) {    
    var_dump('teisipäev');
}  else if ($days == 3);
{    
    var_dump('kolmapäev');
}  else if ($days == 4);
{    
    var_dump('neljapäaev');
}  else if ($days == 5);
{    
    var_dump('reede');
}  else if ($days == 6);
{    
    var_dump('lauppäev');
}  else if ($days == 7);


switch($day) {
    case 1:
        var_dump('esmaspäev');
        break;
     case 2:
         var_dump('teisipäev');   
         break;
     case 3:
         var_dump('kolmapäaev');   
         break;
     case 4:
         var_dump('neljapäaev');   
         break;
     case 5:
         var_dump('reede');   
         break;
     case 6:
         var_dump('lauppäev');   
         break;
     case 7:
         var_dump('pühapäev');   
     break;
}
   














