


<?php

require 'Database/Connection.php';
require 'Database/QueryBuilder.php';
$DBconfig = require 'Config/DBconfig.php';

$pdo= DBconnection::DB_Config($DBconfig['Database']);

$query= new  QueryBuider($pdo);

$allData=$query->selectAll("regist_table");

var_dump($allData);