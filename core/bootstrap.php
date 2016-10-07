<?php

// Get the database config, username etc and pass it down the the static method at the bottom
$config = require 'config.php';

require 'core/Router.php';

require 'core/database/Connection.php';

require 'core/database/QueryBuilder.php';

require 'core/functions.php';


// Call the static method
//$pdo = Connection::make();

// Call the static method inline
return new QueryBuilder(
    Connection::make($config['database'])
);
