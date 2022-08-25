<?php
$link = oci_connect("system","12345","localhost/CLRExtProc");
if($link){
	echo "The connection is ok";
}else{
	echo "The connection is not ok";
}
?>