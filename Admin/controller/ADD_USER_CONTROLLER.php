<?php

    require_once '../model/db_config.php';

    $email="";
    $err_email="";

    $pass="";
    $err_pass="";
    $err_db="";

    $fname="";
    $err_fname="";

    $lname="";
    $err_lname="";

    $pas="";
    $err_pass="";
    $char="'#','?'";
    $num="1,2,3,4,5,6,7,8,9,0";


    
 $hasError=false;
 
 if(isset($_POST["sign_up"])){


     if(empty($_POST["fname"])){
        $hasError = true;
        $err_fname="First Name required";
    }
    else if((is_numeric($_POST["fname"])==true)){
        $hasError = true;
        $err_fname="Number not allowed";
    }

    else{
        htmlspecialchars($_POST["fname"]);
            $fname = $_POST["fname"];
    }

     if(empty($_POST["lname"])){
        $hasError = true;
        $err_lname="Last Name required";
    }
    else if((is_numeric($_POST["lname"])==true)){
        $hasError = true;
        $err_lname="Number not allowed";
    }

    else{
        htmlspecialchars($_POST["lname"]);
            $lname = $_POST["lname"];
    }




    if(empty($_POST["email"])){
        $hasError = true;
        $err_email="Email Required";
    }

    else if (!stristr($_POST["email"],"@") and !stristr($_POST["email"],".")){
        $hasError = true;
        $err_email="Put Correct Email address";
        exit();
    }
    else{
        htmlspecialchars($_POST["email"]);
        $email = $_POST["email"];
    }

    if(empty($_POST["password"])){
        $hasError = true;
        $err_pass="Password Required";
    }
   
    
    else{
        htmlspecialchars($_POST["password"]);
        $pas = $_POST["password"];
    }

   

        if(!$hasError){
            insertUser($fname, $lname,$email,$pas);
        }
 }
 function insertUser($fname,$lname,$email,$pas){
    $conn=getConnection();
    //$query = "insert into user_info values ('USERSQ.NEXTVAL','$name','$email','$pas','$adrs','Dhaka','$gender','$year.$month.$bdate','$phn','$nid','$blood_group','$opsn')";
    $query = "CALL add_user ('" . $fname. "', '" . $lname. "','" . $email. "', '" . $pas . "')";
    $statement=oci_parse($conn,$query);
    oci_execute($statement);
    
    
}
 //$query = "insert into StudentUser values ('$fname','$lname','$email','$pas')";
    // function getAdd_user(){
    //     $query="select * from add_user";
    //     $rs = get($query);
    //     return $rs;
    // }
?>



