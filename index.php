<?php

$name = 'tanel';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?=$name?>!!!!</h1>
    <ul>
        <?php for($i=0;$i<10;$i++): ?>
           <li><?=$i?></li>
         <?php endfor ?>
        <li></li>
    </ul>
</body>
</html>

