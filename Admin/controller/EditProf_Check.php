<?php 
session_start();
  if (isset($_POST['submit'])) {

    $id = $_GET['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_GET['uname'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];


    $link = oci_pconnect("system", "12345", "127.0.0.1/XE");

    $result = oci_parse($link, "UPDATE t_register SET t_name = '$name', t_email = '$email', t_gender = '$gender', t_pass = '$password' where t_id = '$id'");
      oci_execute($result);

      header('location: ../view/Teacher.php');




    

  }

?>