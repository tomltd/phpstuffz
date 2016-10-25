<?php


App::bind('config', require 'config.php');

die(var_dump(App::get('config')));


// Call the static method inline
App::bind('database', new QueryBuilder(
    Connection::make(App::get('config')['database'])
));





// Get the database config, username etc and pass it down the the static method at the bottom

// require 'core/Router.php';
//
// require 'core/Request.php';
//
// require 'core/database/Connection.php';
//
// require 'core/database/QueryBuilder.php';
//
// require 'core/functions.php';


// Call the static method
//$pdo = Connection::make();
