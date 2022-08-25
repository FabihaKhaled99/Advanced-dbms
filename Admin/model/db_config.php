<?php
	// $db_server="localhost";
	// $db_uname="root";
	// $db_pass="";
	// $db_name="web_project";

	//$connection_string="localhost/XE";
	//$db_uname="scott";
	//$db_pass="tiger";
	// $db_name="web_project";

	
	function execute($query){ // responsible for running insert,update,delete
		//global $connection_string,$db_uname,$db_pass;
		//$conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);

		$conn = oci_connect('system', '12345', 'localhost/XE');
		
		
		// if($conn){
		// 	if($result=oci_parse($conn,$query)){
		// 		return true;
		// 		oci_execute($result);
		// 	}
		// 	else{
		// 		return oci_error($conn);
		// 	}
		// }

		//return $conn;
	}
	function get($query){  // responsible for running select queries
		// global $db_server,$db_uname,$db_pass,$db_name;
		// $conn = mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
		// $data = array();
		// if($conn){
		// 	$result = mysqli_query($conn,$query);
		// 	while($row = mysqli_fetch_assoc($result)){
		// 		$data[] = $row;
				
		// 	}
		// }
		// return $data;

		
		$conn = oci_connect('system', '12345', 'localhost/XE');
		//$dt = array();
		$data = oci_parse($conn,$query);
		oci_execute($data);
		//$row=oci_fetch_assoc($data);
		// if($conn){
		// //$result1 = oci_fetch_array($data, OCI_ASSOC+OCI_RETURN_NULLS);
		//  while($row = oci_fetch_array($data,OCI_ASSOC+OCI_RETURN_NULLS)){
		//  	$dt[] = $row;
				
		// // 	// }
		//  }
		return $data;
	}

	function getConnection(){
		$conn=oci_connect('system', '12345', 'localhost/XE');
		if (!$conn) {

			$e = oci_error();
			trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
		 }

		 return $conn;
	}


	

	
		
?>