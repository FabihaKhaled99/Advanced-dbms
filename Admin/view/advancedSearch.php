<center>
	<body>
		<link rel="stylesheet" href="CSS/ShowAllTeachers.css">
<form method="POST" action="">
<div align="Right">
<input type="text" name="search">
<input class="btn btn-primary" type="submit" name="submit" value="Search">
</div>
<br>
<br>
<table class="table table-bordered">

<?php



if (isset($_POST['submit'])) {
?>
<tr>
<th>NOTE ID</th>
<th>FILES</th>
<th>COURSE ID</th>

</tr>
<?php



$c_id = $_POST['search'];



$link = oci_connect("system", "12345", "127.0.0.1/XE");



$result = oci_parse($link, "SELECT notes.* FROM notes,course_code WHERE notes.course_Id=course_code.course_Id AND course_code.course_id IN (SELECT course_id FROM course_code WHERE course_id LIKE '$c_id%')");
oci_execute($result);

$i=0;
while($row=oci_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["N_ID"]; ?></td>
<td><?php echo $row["FILES"]; ?></td>
<td><?php echo $row["COURSE_ID"]; ?></td>
</tr>
<?php
$i++;
}



}
else{
?>
<tr>
<th>COURSE ID</th>
<th>COURSE NAME</th>
</tr>
<?php




$link = oci_pconnect("system", "12345", "127.0.0.1/XE");



$result = oci_parse($link, "SELECT * FROM course_code");
oci_execute($result);



$i=0;
while($row=oci_fetch_array($result)) {
?>
<tr>
<td><?php echo $row["COURSE_ID"]; ?></td>
<td><?php echo $row["COURSE_NAME"]; ?></td>
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