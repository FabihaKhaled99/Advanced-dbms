<?php 
  if (isset($_POST['submit'])) {

     
    $name = $_POST['name'];
    $email= $_POST['email'];
    $uname = $_POST['uname'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    //$cpassword = $_POST['cpassword'];

    $link = oci_connect("system", "12345", "127.0.0.1/XE");

    $query = "CALL add_student ('" . $name . "', '" . $email . "', '" . $uname . "', '" . $gender . "','" . $password. "')";
    $result = oci_parse($link, $query);
      oci_execute($result);
      echo $result;

      //header('location: ../view/manager.php');
      //"CALL add_student ('" . $name . "', '" . $email . "', '" . $uname . "', '" . $gender . "','" . $password. "')";

  }

?>