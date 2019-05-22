
<?php

class QueryBuider{

    var $pdo;

    function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    

    function selectAll( $tableName){

        $statement= $this->pdo->prepare("select * from {$tableName}");
         $statement->execute();
         return $statement->fetchAll();
    }
}