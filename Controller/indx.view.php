


<?php
// $pdo = require 'Core/Bootstrap.php';
require '../Core/Database/Connection.php';
require '../Core/Database/QueryBuilder.php';
$config = require '../Config/DBconfig.php';

$pdo= DBconnection::DB_Config($config['Database']);

// $query= new  QueryBuider($pdo);

// $allData=$query->selectAll("regist_table");
 
// var_dump($allData);u