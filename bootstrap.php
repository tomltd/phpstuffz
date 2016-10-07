<?php

// Get the database config, username etc and pass it down the the static method at the bottom
$config = require 'config.php';


require 'database/Connection.php';

require 'database/QueryBuilder.php';

require 'functions.php';

require 'Task.php';


// Call the static method
//$pdo = Connection::make();

// Call the static method inline
return new QueryBuilder(
    Connection::make($config['database'])
);
