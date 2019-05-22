

<?php

$DBconfig = require 'Config/DBconfig.php';
try{

    $pdo=new PDO(
        $DBconfig["DBhost"]. ";".$DBconfig["DBname"],
        $DBconfig["DBusername"],
        $DBconfig["DBpassword"],
        $DBconfig["Erroroption"]

    );
}catch(PDOException $e){
    die($e->getMessage());
}

