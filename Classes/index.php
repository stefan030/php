<?php

// Task creation which has description and is not completed on creation

class Task {

    public $description; // property

    public $completed = false; // property

    public function __construct($description) { // Automatically triggered on instantiation - Whenever we prepare new task,

        $this->description = $description; // Assigning a property to this object

    }

    public function complete() {

        $this->completed = true;

    }

    public function isComplete() {

        return $this->completed;

    }

};

// $task = new Task('Go to the store'); // Instance of a class

$tasks = [

    new Task('Go to the store'),
    new Task('Finish my homework'),
    new Task('Clean my room')

];

$tasks[0]->complete();





/*
 *
dd($tasks);

$task->complete()

var_dump($task->isComplete());

dd($task);


$task->description;  - This is not possible as the description property is protected and can not be accessed by outside world

*/

require 'index.view.php';