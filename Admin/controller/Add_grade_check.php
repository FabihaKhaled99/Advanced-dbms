<?php 
  if (isset($_POST['submit'])) {

     
    $gid = $_POST['gid'];
    $mgd = $_POST['mgd'];
    $fgd = $_POST['fgd'];
    $allgd = $_POST['allgd'];
    $cid= $_POST['cid'];
    
    //$cpassword = $_POST['cpassword'];

    $link = oci_connect("system", "12345", "127.0.0.1/XE");

    $query = "CALL add_grade_reports ('" . $gid. "', '" . $mgd . "','" . $fgd . "','" . $allgd . "','" . $cid . "')";
    $result = oci_parse($link, $query);
      oci_execute($result);
      echo 'success';

      //header('location: ../view/manager.php');
      //"CALL add_student ('" . $name . "', '" . $email . "', '" . $uname . "', '" . $gender . "','" . $password. "')";

  }

?>