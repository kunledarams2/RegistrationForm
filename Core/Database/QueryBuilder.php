
<?php

class QueryBuider{

    public $pdo;

    function __construct($pdo)
    {
        $this->pdo=$pdo;
    }
    
    

    function selectAll($tableName){

        $statement= $this->pdo->prepare("select * from {$tableName}");
         $statement->execute();
         return $statement->fetchAll();
    }

    function insertData($tableName, $parameters){

        $qury = printf("insert into %s (%s) value %s",

                        $tableName,

                        implode(','.array_keys($parameters)),

                        ':'. implode(', :'.array_keys($parameters))
    
    );
        try{
            $statement=$this->pdo->prepare($qury);
            $statement->execute($parameters);
        } catch(PDOException $e){
            die($e->getMessage());
        }

    }
}