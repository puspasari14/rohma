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
	<title>Tampil data di postgre</title>
</head>
<body>
	<div id="div1">
		<a href="insert.php">Tambah Data</a>
			<table width="300" border="1" align="center">
				<tr>
					<th width="78" scope="row">First Name</th>
					<th width="78" scope="row">Last Name</th>
					<th width="78" scope="row">Age</th>
					<th width="78" scope="row">Action</th>
				</tr>
				<?php
				include"connect.php";
				$q = "select * from student_information order by id desc";
				$sql = pg_query($q);
				$data = pg_fetch_all($sql);
				foreach ($data as $key) {
				?>
				<tr>
					<td><?php echo $key['first_name']; ?></td>
					<td><?php echo $key['last_name']; ?></td>
					<td><?php echo $key['age']; ?></td>
					<td>
						<a href="edit.php?id=<?php echo $key['id'] ?>">Edit</a>
						<a href="hapus.php?id=<?php echo $key['id'] ?>" onclick="confirm('apakah anda yakin ?');">Hapus</a>
					</td>
				</tr>
			<?php } ?>
			</table>
	</div>
</body>
</html>