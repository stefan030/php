<?php


function connectToDb() {
    try {

        return new PDO('mysql:host=127.0.0.1;dbname=laracastphp', 'root','');

    } catch(PDOException $e) {

        die($e->getMessage());

    }
}

function fetchAllTasks($pdo) {

    $statement = $pdo->prepare('select * FROM mytodos');

    $statement->execute();

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task'); // After execution we want to fetch all results in memory and then store each column/row into an object

}


function dd($data) {
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
}