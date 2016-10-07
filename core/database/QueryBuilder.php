<?php

class QueryBuilder
{

    protected $pdo;

    // Typehinting (PDO $pdo). I want an instance of the PDO class
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }


    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        // Fetch as an object
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

}




// Psudo class for example;
// class Contractor
// {
//     protected $electrician;
//     protected $plumber;
//     protected $designer;
//
//     public function __construct($electrician, $plumber, $designer)
//     {
//         $this->electrician = $electrician;
//         $this->plumber = $plumber;
//         $this->designer = $designer;
//     }
//
//     public function preformWork()
//     {
//         //
//     }
// }
