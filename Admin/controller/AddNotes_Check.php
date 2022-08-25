<?php 
  if (isset($_POST['submit'])) {

    $nid = $_POST['nid']; 
    $file = $_POST['file'];
    $cid = $_POST['cid'];
  
    //$cpassword = $_POST['cpassword'];

    $link = oci_connect("system", "12345", "127.0.0.1/XE");

    $query = "CALL uni_management.add_notes ('" . $nid. "', '" . $file. "', '" . $cid . "')";
    $result = oci_parse($link, $query);
      oci_execute($result);
      echo 'success';

      //header('location: ../view/manager.php');
      //"CALL add_student ('" . $name . "', '" . $email . "', '" . $uname . "', '" . $gender . "','" . $password. "')";

  }

?>