<?php


require 'database/Connection.php';

require 'database/QueryBuilder.php';

require 'Task.php';



$pdo = Connection::make();



$query = new QueryBuilder($pdo);



$task = $query->selectAll('todos');



require 'index.view.php';