<?php


$query = require 'bootstrap.php';



$tasks = $query->selectAll('mytodos');

require 'index.view.php';



