<?php

// load all the classes via composer autoload
require 'vendor/autoload.php';

require 'core/bootstrap.php';

// $router = new Router;
//
// require 'routes.php';

// require $router->direct($uri);

Router::load('routes.php')

    ->direct(Request::uri(), Request::method());


// Fetch all the todos and map them into instances of Task






//
// class Task {
//
//     public $description;
//     public $completed = false;
//
//     // A method if defined in a class
//     public function __construct($description)
//     {
//         // Automatically triggered on instantiation
//         // Setting a property in this instance (object)
//         $this->description = $description;
//     }
//
//     public function isCompleted()
//     {
//         return $this->completed;
//     }
//
//     public function complete()
//     {
//         $this->completed = true;
//     }
//
//
// }
//
// $tasks = [
//     new Task('Go to the store'),
//     new Task('Finish learning stuff'),
//     new Task('Slacklining')
// ];
//
// $tasks[0]->complete();





// a new task object
// $task = new Task('Go to the store');

//var_dump($task->isCompleted());

// completed the task
// $task->complete();

//var_dump($task->isCompleted());


//dd($task);

// require 'functions.php';
//
// $animals = ['cat', 'dog', 'wombat', 'wallaby'];
//
//
// dd($animals);

//die(var_dump($animals));

// $person = [
//         'age' => 31,
//         'hair' => 'blond',
//         'job' => 'web developer'
//     ];
//
//     $person['name'] = 'Tom';
//
//
// //var_dump($person);
//
// $task = [
//     'title' => 'Finish Homework',
//     'due' => 'today',
//     'assigned_to' => 'Tom',
//     'completed' => true
//     ];
//
// //var_dump($task);
//
//
// //    echo $take['complete'] ? 'It is complete' : 'incomplete';
//
//
// //    echo 'Due Date ' . $task['due'];
//
//     ;
