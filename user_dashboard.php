<?php
session_start();

//connect to the data base
include "connect.php";
$uname = $_SESSION['username'];
$sql = "SELECT * FROM shelter_form WHERE username='$uname'";
// $sql1 = "SELECT * FROM user";
$result = mysqli_query($conn,$sql);
// $result1 = mysqli_query($conn,$sql1);
?>
<html>
	<head>
		 <style>
body {
  background-image: url('14.jpg');
}
.backimg{
	background-color: white;
}
</style> 
		<title>Manage post</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">

	</head>
	<body>
		<div class="backimg">
		<div style="display:table;float: right; margin:10px;">
			<button class="btn btn-primary" onclick="window.location.href = 'logout.php';">logout</button>
		</div>

		<div class="container" style="border: 2px solid skyblue; display: table;margin-top: 40px;clear: both; border-radius: 15px;">
		<center><h2>Pets Details</h2></center>
				<table class="table table-hover">
					<head>
						<tr>
							<th>ID</th>
							<th>Pet Name</th>
							<th>Pets</th>
							<th>age</th>
							<th>breed</th>
							<th>location</th>
							<th>no</th>
							<th>note</th>
							<th>image</th>
						</tr>
					</thread>
					<tbody>
							<?php

								if(mysqli_num_rows($result)>0){
									while($row = mysqli_fetch_assoc($result)){
//get data from database
							?>
							<tr>
								<td><?php echo $row['id']; ?></td>
								<td><?php echo $row['petname']; ?></td>
								<td><?php echo $row['pets']; ?></td>
								<td><?php echo $row['age']; ?></td>
								<td><?php echo $row['breed']; ?></td>
								<td><?php echo $row['location']; ?></td>
								<td><?php echo $row['no']; ?></td>
								<td><?php echo $row['note']; ?></td>
								<td><?php echo $row['image']; ?></td>
								<td><a class="btn btn-danger" href="user/deleteuser.php?id=<?php echo $row['id'];?>">delete</a><td>
										<td><a class="btn btn-primary" href="user/update_shelter.php?id=<?php echo $row["id"]; ?>">Update</a></td>
										</tr>
									<?php 
								}

								}
									?>
									</tbody>

										</table>
									</div>
								</div>
				</body>
	</html>
