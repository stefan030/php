<?php

$person = [

    'age' => 31,
    'hair' => 'black',
    'career' => 'web developer'

];

$person['name'] = 'Jeff'; // add new pair to existing array

unset($person['age']); // remove pair from existing array

echo '<pre>';

var_dump($person); // var_dump is a function that we can call to literally 'dump' the value for anything and everything

echo '</pre>';

require 'index.view.php';