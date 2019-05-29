
<?php

require 'Core/Database/Conection.php';
require 'Core/Database/QueryBuilder.php';
$config=require '../Config/DBconfig.php';

return new QueryBuider(
    DBconnection::DB_Config($config['Database'])
);
