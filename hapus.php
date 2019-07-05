<?php
include"connect.php";
$id = $_GET['id'];
$q = "DELETE FROM student_information WHERE id=$id";
$sql = pg_query($q);
if($q){
	header("Location:index.php");
}
?>