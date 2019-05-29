

<?php


class DBconnection{

  public static function DB_Config ($DBconfig){

    try{

        return new PDO(

            $DBconfig["DBhost"]. ";dbname =". $DBconfig["DBname"],
            $DBconfig["DBusername"],
            $DBconfig["DBpassword"],
            $DBconfig["Erroroption"]
    
        );
    }catch(PDOException $e){
        die($e->getMessage());
    }

     }
}



