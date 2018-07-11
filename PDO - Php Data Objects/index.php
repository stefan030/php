<?php

require 'functions.php';
require 'Task.php';

// "PDO" method to connect to database

$pdo = connectToDb();

// Once connect to PDO, we are able to a SQL query. Once we prepare it, we need to execute it

$tasks = fetchAllTasks($pdo);




require 'index.view.php';



