

<?php
session_start();
// connect to the database- Registration
// $con=mysqli_connect("localhost", "root", "kunle");
// mysqli_select_db($con,"Registration");




require 'functions.php';

    class studentRegist{
        public $name;
        var $matric;
        var $department;
        var $level;
        var $password;
        var $comfirmpassword;

        function __construct($name, $matric, $department, $level, $password, $comfirmpassword){
            $this->name=$name;
            $this->matric =$matric;
            $this->department=$department;
            $this->level=$level;
            $this->password=$password;
            $this->comfirmpassword=$comfirmpassword;

        }


        // Method to insert Data into the registable 
        function insertData(){

            // $con=mysqli_connect("localhost", "root", "kunle");
            // mysqli_select_db($con,"Registration");
            $pdo= connectDB();


            if($this->password==$this->comfirmpassword && $pdo){
                // check if the name exist in the database 
                // $checkName= $pdo->prepare('select * from regist_table where studname= '$this->name')
                $checkName="select * from regist_table where studName = '$this->name'";
               
                $result = mysqli_query($pdo, $checkName);
                $numRow= mysqli_num_rows($result);
                

                if($numRow ==1){
                    echo "You have already registered". " ". $this->name;
                    return;
                }

                // insert the data if name does not exist
                else{
                    $synInsert=("INSERT INTO regist_table (studName, studMatrics, studDepartment, studLevel, studPassword)
                    VALUES ('$this->name','$this->matric','$this->department','$this->level','$this->password') "
                        );
                        mysqli_query($pdo,$synInsert);
                        echo " Successful Welcome" . " ". $this->name;
                }
               
                    
            }
            else{
                die("connection fail".mysqli_connect_error());
                echo "Please check your password";
            }

        }
    }
    if(isset($_POST)){

        $studentData=new studentRegist($_POST['lastname'].' '.$_POST['firstname'], $_POST['stmatric'],
        $_POST['stdepartment'],$_POST['mylevel'],$_POST['password'],$_POST['confirmpassword']);
         $studentData->insertData();
    }

    class dataBase{
        public $dbaseName;
        public $dbasePassword;
     
    }

    require 'RegF.php';

?>    
