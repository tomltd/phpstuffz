<?php

//var_dump('You typed ' . $_POST['name']);

App::get('database')->insert('users', [
    'name' => $_POST['name']
]);

// Redirect to the homepage
header('Location: /');
