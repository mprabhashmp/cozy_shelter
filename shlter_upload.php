<?php
include_once 'connect.php';

	if(count($_POST)>0) {
		mysqli_query($conn,"UPDATE shelter_form set userid='" . $_POST['id'] . "', petname='" . $_POST['petname'] . "', breed='" . $_POST['breed'] . "', location='" . $_POST['location'] . "' ,no='" . $_POST['note'] . "' WHERE userid='" . $_POST['id'] . "'");
	$message = "Record Modified Successfully";
	}
		$result = mysqli_query($conn,"SELECT * FROM shelter_form WHERE userid='" . $_GET['userid'] . "'");
		$row= mysqli_fetch_array($result);
	?>
	<html>
		<head>
			<title>Update Shelter Data</title>
		</head>
<body>
	<form name="frmUser" method="post" action="">
		<div><?php if(isset($message)) { echo $message; } ?>
	</div>
		<div style="padding-bottom:5px;">
	<a href="retrieve.php">Employee List</a>
		</div>
		Username: <br>
			<input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
			<input type="text" name="userid"  value="<?php echo $row['userid']; ?>">
		<br>
		First Name: <br>
			<input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
		<br>
		Last Name :<br>
		<input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
		<br>
		City:<br>
		<input type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>">
			<br>
		Email:<br>
			<input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
		<br>
			<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>