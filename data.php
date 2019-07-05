<?php
include"connect.php";
if(isset($_POST['update'])){
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];

	$q = "UPDATE student_information SET first_name='$fname',last_name='$lname',age='$age' WHERE id=$id";
	$sql = pg_query($q);
	header("Location:index.php");
}

?>