
<center>
	<body>
		<link rel="stylesheet" href="CSS/ShowAllTeachers.css">
	
<form method="POST" action="">
<div align="Right">
<input type="text" name="search">
<input  type="submit" name="submit" value="Search">
</div>
<br>
<br>
<table class="table table-bordered">
<tr>
<th>User Name</th>
<th>First Name</th>
<th>Last Name</th>
<th>Email</th>
<th>Password</th>
</tr>
<?php



if (isset($_POST['submit'])) {



$uname = $_POST['search'];




$link = oci_connect("system", "12345", "127.0.0.1/XE");



$result = oci_parse($link, "SELECT * FROM StudentUser WHERE uname LIKE '$uname%'");
oci_execute($result);

$i=0;
while($row=oci_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["UNAME"]; ?></td>
<td><?php echo $row["FNAME"]; ?></td>
<td><?php echo $row["LNAME"]; ?></td>
<td><?php echo $row["UEMAIL"]; ?></td>
<td><?php echo $row["UPASS"]; ?></td>
</tr>
<?php
$i++;
}



}
else{



$link = oci_pconnect("system", "12345", "127.0.0.1/XE");



$result = oci_parse($link, "SELECT * FROM StudentUser");
oci_execute($result);



$i=0;
while($row=oci_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["UNAME"]; ?></td>
<td><?php echo $row["FNAME"]; ?></td>
<td><?php echo $row["LNAME"]; ?></td>
<td><?php echo $row["UEMAIL"]; ?></td>
<td><?php echo $row["UPASS"]; ?></td>
</tr>
<?php
$i++;
}
}




?>

</table>
</form>
</body>

</center>

