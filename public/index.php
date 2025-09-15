<?php


if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', $_SERVER["REQUEST_URI"])) {
    return false;    // serve the requested resource as-is.
}

function dump(...$args){
    echo '<pre';
    var_dump(...$args);
    echo '</pre';
}



switch($_SERVER['REQUEST_URI']) {
    case '/':
        $title = 'world news';
  $posts = [
    [ 'title' => 'world news 1', 'author' => 'Pets', 'published'=>'11s.09.2025', 'body ' => 'some world news 1 body'],
    [ 'title' => 'world news 2', 'author' => 'anns', 'published'=>'12.09.2025', 'body ' => 'some world news 2 body'],
    [ 'title' => 'world news 3', 'author' => 'maalis', 'published'=>'10.09.2025', 'body ' => 'some world news 3 body'],
    [ 'title' => 'world news 4', 'author' => 'mats', 'published'=>'13.09.2025', 'body ' => 'some world news 4 body'],
  ];
        include __DIR__ . '/../views/index.php';
        break;
        case '/us':
            $title = 'us news';
  $posts = [
    [ 'title' => 'us news 1', 'author' => 'Pets', 'published'=>'11s.09.2025', 'body ' => 'some world news 1 body'],
    [ 'title' => 'us news 2', 'author' => 'anns', 'published'=>'12.09.2025', 'body ' => 'some world news 2 body'],
    [ 'title' => 'us news 3', 'author' => 'maalis', 'published'=>'10.09.2025', 'body ' => 'some world news 3 body'],
    [ 'title' => 'us news 4', 'author' => 'mats', 'published'=>'13.09.2025', 'body ' => 'some world news 4 body'],
  ];

            include __DIR__ . '/../views/index.php';
           break;
           default:echo '404 page ont found'; 
}