<?php


$tasks = $app['database']->selectAll('todos');


//dd($tasks);

//var_dump($tasks[0]->description);

require 'views/index.view.php';
