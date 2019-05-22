

<?php
try{
    $pdo =new PDO("local:host=127.0.0.1;dbname=Registration","root","kunle");
}catch(PDOException $e){
    die($e->getMessage());
}

