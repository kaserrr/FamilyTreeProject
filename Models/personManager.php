<?php

include_once "databaseConnection.php";

class PersonManager {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    
}