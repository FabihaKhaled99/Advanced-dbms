<?php 
  if (isset($_POST['submit'])) {

     
    $name = $_POST['name'];
    $email= $_POST['email'];
    $uname = $_POST['uname'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    //$cpassword = $_POST['cpassword'];

    $link = oci_connect("system", "12345", "127.0.0.1/XE");

    $query = "INSERT INTO t_register VALUES(Teacher_Id.NEXTVAL,'$name','$email','$uname', '$gender', '$password')";
    $result = oci_parse($link, $query);
      oci_execute($result);
      echo "success";

      header('location: ../view/Teacher.php');

  }

?>