<?php

namespace App\Controllers;

class PublicController
{
    public function index()
    {
        $title = 'world news';
        $posts = [
            ['title' => 'world news 1', 'author' => 'Pets', 'published' => '11s.09.2025', 'body' => 'some world news 1 body'],
            ['title' => 'world news 2', 'author' => 'anns', 'published' => '12.09.2025', 'body' => 'some world news 2 body'],
            ['title' => 'world news 3', 'author' => 'maalis', 'published' => '10.09.2025', 'body' => 'some world news 3 body'],
            ['title' => 'world news 4', 'author' => 'mats', 'published' => '13.09.2025', 'body' => 'some world news 4 body'],

        ];
        view('index', compact('title', 'posts'));
    }

    public function us(){
          $title = 'us news';
  $posts = [
    [ 'title' => 'us news 1', 'author' => 'Pets', 'published'=>'11s.09.2025', 'body' => 'some world news 1 body'],
    [ 'title' => 'us news 2', 'author' => 'anns', 'published'=>'12.09.2025', 'body' => 'some world news 2 body'],
    [ 'title' => 'us news 3', 'author' => 'maalis', 'published'=>'10.09.2025', 'body' => 'some world news 3 body'],
    [ 'title' => 'us news 4', 'author' => 'mats', 'published'=>'13.09.2025', 'body' => 'some world news 4 body'],
  
    ];
     view('us', compact('title', 'posts'));

}

 public function tech(){
          $title = 'tech news';
  $posts = [
    [ 'title' => 'tech news 1', 'author' => 'Pets', 'published'=>'11s.09.2025', 'body' => 'some world news 1 body'],
    [ 'title' => 'tech news 2', 'author' => 'anns', 'published'=>'12.09.2025', 'body' => 'some world news 2 body'],
    [ 'title' => 'tech news 3', 'author' => 'maalis', 'published'=>'10.09.2025', 'body' => 'some world news 3 body'],
    [ 'title' => 'tech news 4', 'author' => 'mats', 'published'=>'13.09.2025', 'body' => 'some world news 4 body'],
  
    ];
     view('tech', compact('title', 'posts'));
}

public function form(){
    view('form');
}

    public function answer(){
        dump($_SERVER);
        dump($_GET);
        dump($_POST);
    }
}
