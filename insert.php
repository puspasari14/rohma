<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		#div1 {
			background-color:#FC6;
			height:250px;
			width:300px;
			margin-top:100px;
			margin-right:auto;
			margin-left:auto;
		}
	</style>
	<title>Insert data di postgre</title>
</head>

<?php
if(isset($_POST['insert'])){
	include 'connect.php';	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$age = $_POST['age'];

	$q = "INSERT INTO student_information(first_name,last_name,age)VALUES('".$fname."','".$lname."','".$age."')";
	$sql = pg_query($q);
	if($sql){
		header("Location:index.php");
	}
}
?>
<body>
	<div id="div1">
		<form action="" method="post">
			<table width="200" border="1" align="center">
				<tr>
					<th colspan="2" scope="row"><h2>Insert Person Informations</h2></th>
				</tr>
				<tr>
					<th width="78" scope="row">First Name</th>
					<td width="106"><input type="text" name="fname" id="fname"></td>
				</tr>
				<tr>
					<th width="78" scope="row">Last Name</th>
					<td width="106"><input type="text" name="lname" id="lname"></td>
				</tr>
				<tr>
					<th width="78" scope="row">Age</th>
					<td width="106"><input type="number" name="age" id="age" min="0" max="200"></td>
				</tr>
				<tr>
					<th colspan="2" scope="row"><input type="submit" name="insert" id="insert" value="Insert"></th>				</tr>
			</table>
		</form>
	</div>
</body>
</html>