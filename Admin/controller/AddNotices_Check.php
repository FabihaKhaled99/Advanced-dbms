<?php 
  if (isset($_POST['submit'])) {

     
    $nid = $_POST['nid'];
    $heading= $_POST['heading'];
    $body = $_POST['body'];
    $cid = $_POST['cid'];
    //$cpassword = $_POST['cpassword'];

    $link = oci_connect("system", "12345", "127.0.0.1/XE");

    $query = "CALL d_notice ('" . $nid. "', '" . $heading . "', '" . $body . "', '" . $cid . "')";
    $result = oci_parse($link, $query);
      oci_execute($result);
      echo 'success';

      //header('location: ../view/manager.php');
      //"CALL add_student ('" . $name . "', '" . $email . "', '" . $uname . "', '" . $gender . "','" . $password. "')";

  }

?>