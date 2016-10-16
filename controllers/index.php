<?php


$tasks = $app['database']->selectAll('todos');

$users = $app['database']->selectAll('users');



//dd($tasks);

//var_dump($tasks[0]->description);

require 'views/index.view.php';
