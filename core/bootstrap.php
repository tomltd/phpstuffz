<?php

$app = [];

$app['config'] = require 'config.php';

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

// Call the static method inline
$app['database'] = new QueryBuilder(
    Connection::make($app['config']['database'])
);
