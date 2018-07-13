<?php

// Facory build which builds QueryBuilder

require 'database/Connection.php';
require 'database/QueryBuilder.php';

// "PDO" method to connect to database

// $pdo = Connection::make(); We can just inline this part down below


return new QueryBuilder(
    Connection::make()
);