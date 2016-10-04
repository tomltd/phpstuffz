<?php

$person = [
        'age' => 31,
        'hair' => 'blond',
        'job' => 'web developer'
    ];

    $person['name'] = 'Tom';




//var_dump($person);

$task = [
    'title' => 'Finish Homework',
    'due' => 'today',
    'assigned_to' => 'Tom',
    'completed' => true
    ];

//var_dump($task);


//    echo $take['complete'] ? 'It is complete' : 'incomplete';


//    echo 'Due Date ' . $task['due'];

    ;

require 'index.view.php';
