<?php


class QueryBuilder {

    protected $pdo;


    public function __construct($pdo) {

        $this->pdo = $pdo;

    }



    public function selectAll($table) {

        $statement = $this->pdo->prepare("select * FROM {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS); // After execution we want to fetch all results in memory and then store each column/row into an object

    }

}