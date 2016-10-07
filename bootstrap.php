<?php

require 'database/Connection.php';

require 'database/QueryBuilder.php';

require 'functions.php';

require 'Task.php';


// Call the static method
$pdo = Connection::make();

$query = new QueryBuilder($pdo);
