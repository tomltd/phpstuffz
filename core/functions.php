<?php

/* Dump and Die */
function dd($theData) {
    echo '<pre>';
    die(var_dump($theData));
    echo '</pre>';
}



/* Silly age homework */
// if (age(15)) {
//     echo 'you are old enough';
// } else {
//     echo 'too young';
// }

function age($age) {
    if ($age >= 21) {
        return true;
    } else {
        return false;
    }
}


// class Post
// {
//     public $title;
//     public $published;
//
//     public function __construct($title, $published)
//
//     {
//         $this->title = $title;
//         $this->published = $published;
//     }
// }
//
// $posts = [
//         new Post('My First Post', true),
//         new Post('My Second Post', true),
//         new Post('My Third Post', true),
//         new Post('My Fourth Post', false),
//
//     ];
//
//     $titles = array_column($posts, 'title');
//
//     var_dump($titles);
