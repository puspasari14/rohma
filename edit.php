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
	<title>Update data di postgre</title>
</head>
<body>
<?php
	include"connect.php";
	$id = $_GET['id'];
	$q = "SELECT * FROM student_information WHERE id=$id";
	$sql = pg_query($q);
	while($data = pg_fetch_array($sql)){
		$fname = $data['first_name'];
		$lname = $data['last_name'];
		$age   = $data['age'];
	}
?>
	<div id="div1">
		<form action="data.php" method="post">
			<table width="200" border="1" align="center">
				<tr>
					<th colspan="2" scope="row"><h2>Update Person Informations</h2></th>
				</tr>
				<tr>
					<th width="78" scope="row">First Name</th>
					<td width="106">
						<input type="text" name="fname" id="fname" value="<?php echo $fname ?>">
						<input type="hidden" name="id" id="id" value="<?php echo $_GET['id'] ?>">
					</td>
				</tr>
				<tr>
					<th width="78" scope="row">Last Name</th>
					<td width="106"><input type="text" name="lname" id="lname" value="<?php echo $lname ?>"></td>
				</tr>
				<tr>
					<th width="78" scope="row">Age</th>
					<td width="106"><input type="number" name="age" id="age" min="0" max="200" value="<?php echo $age ?>"></td>
				</tr>
				<tr>
					<th colspan="2" scope="row"><input type="submit" name="update" id="update" value="Update"></th>				</tr>
			</table>
		</form>
	</div>
</body>
</html>