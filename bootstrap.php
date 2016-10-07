<?php

require 'database/Connection.php';

require 'database/QueryBuilder.php';

require 'functions.php';

require 'Task.php';


// Call the static method
//$pdo = Connection::make();

// Call the static method inline
return new QueryBuilder(
    Connection::make()
);
