

<?php
session_start();


require '../Core/Database/QueryBuilder.php';
require '../Core/Database/Connection.php';
 $config= require '../Config/DBconfig.php';

$pdo = DBconnection::DB_Config($config['Database']);

$query= new QueryBuider($pdo);
if(isset($_POST)){
    $insertData= $query->insertData('regist_table', [
        'studName'=> $_POST['lastname'].''.$_POST['firstname'],
        'studMatric'=> $_POST['stmatric'],
        'studDepartment'=> $_POST['stdepartment'],
        'studLevel'=> $_POST['mylevel'],
        'studPassword'=> $_POST['password']
    ]);
    
}





    // class studentRegist{
    //     public $name;
    //     var $matric;
    //     var $department;
    //     var $level;
    //     var $password;
    //     var $comfirmpassword;

    //     function __construct($name, $matric, $department, $level, $password, $comfirmpassword){
    //         $this->name=$name;
    //         $this->matric =$matric;
    //         $this->department=$department;
    //         $this->level=$level;
    //         $this->password=$password;
    //         $this->comfirmpassword=$comfirmpassword;

    //     }


    //    // Method to insert Data into the registable 
    //     function insertData(){

          
    //         $pdo= connectDB();


    //         if($this->password==$this->comfirmpassword && $pdo){
                
    //             $checkName="select * from regist_table where studName = '$this->name'";
               
    //             $result = mysqli_query($pdo, $checkName);
    //             $numRow= mysqli_num_rows($result);
                

    //             if($numRow ==1){
    //                 echo "You have already registered". " ". $this->name;
    //                 return;
    //             }

    //             // insert the data if name does not exist
    //             else{
    //                 $synInsert=("INSERT INTO regist_table (studName, studMatrics, studDepartment, studLevel, studPassword)
    //                 VALUES ('$this->name','$this->matric','$this->department','$this->level','$this->password') "
    //                     );
    //                     mysqli_query($pdo,$synInsert);
    //                     echo " Successful Welcome" . " ". $this->name;
    //             }
               
                    
    //         }
    //         else{
    //             die("connection fail".mysqli_connect_error());
    //             echo "Please check your password";
    //         }

    //     }
    // }
    // if(isset($_POST)){

    //     $studentData=new studentRegist($_POST['lastname'].' '.$_POST['firstname'], $_POST['stmatric'],
    //     $_POST['stdepartment'],$_POST['mylevel'],$_POST['password'],$_POST['confirmpassword']);
    //      $studentData->insertData();
    // }

    // class dataBase{
    //     public $dbaseName;
    //     public $dbasePassword;
     
    // }

    require 'RegF.php';

?>    
