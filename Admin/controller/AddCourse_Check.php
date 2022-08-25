<?php 
  if (isset($_POST['submit'])) {

     
    $cid = $_POST['cid'];
    $cname= $_POST['cname'];
    
    //$cpassword = $_POST['cpassword'];

    $link = oci_connect("system", "12345", "127.0.0.1/XE");

    $query = "CALL add_courses ('" . $cid. "', '" . $cname . "')";
    $result = oci_parse($link, $query);
      oci_execute($result);
      echo 'success';

      //header('location: ../view/manager.php');
      //"CALL add_student ('" . $name . "', '" . $email . "', '" . $uname . "', '" . $gender . "','" . $password. "')";

  }

?>