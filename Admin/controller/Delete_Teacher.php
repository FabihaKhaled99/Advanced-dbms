<?php 
session_start();

		$id = $_GET['id'];

		

		$link = oci_pconnect("system", "12345", "127.0.0.1/XE");

		$result = oci_parse($link, "DELETE FROM t_register WHERE t_id = '$id'");
    	oci_execute($result);

    	header('location: ../view/Teacher.php');


?>