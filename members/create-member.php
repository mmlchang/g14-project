<?php 
if(isset($_POST['btn_submit'])){ 
	include '../db/dbconnection.php';  
	$sql = "INSERT INTO member (member_id, member_name, member_ic, member_citizenship, member_age, member_gender, member_dob, member_tel, member_job, member_address,member_type, recommender_id, recommender_name, accept_date, remarks) VALUES ('".$_POST['id']."','".$_POST['name']."','".$_POST['ic']."','".$_POST['citizen']."','".$_POST['age']."','".$_POST['gender']."','".$_POST['dob']."','".$_POST['contact']."','".$_POST['job']."','".$_POST['address']."','".$_POST['member']."','".$_POST['recommender']."','".$_POST['recommender-id']."','".$_POST['accept-date1']."','".$_POST['remarks']."')";
	
	if (mysqli_query($conn, $sql)) {
		/*
		$sql = "INSERT INTO Membership (member_id, username) VALUES ('".$_POST['member-id']."')";
	
		if (mysqli_query($conn, $sql)) {
    		echo "New record created successfully";
		} else {
			echo "Member is not exist";
		}
		*/
		echo "New record created successfully";
	} else {
		echo "Member is not exist";
	}
		/*
    	echo "<script>alert('The information is added');window.location.href</script>";
	} else {
    	echo "<script>alert('Please try again!');window.location.href</script>";
	} 
	*/
		echo "New record created successfully";
}    
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/b41521ee1f.js"></script>
	<link rel="stylesheet" href="../styles/style.css">
	<link rel="icon" type="image/x-icon" href="#">
	<title>Tze Yin Membership Management Portal</title>
</head>

<body>
	<div>
		<a href="../index.php">
			<img src="../images/logo.jpg" alt="Home" class="logo">
		</a>

		<ul class="nav">
			<li><a href="create-member.php">Membership</a></li>
			<li><a href="../transactions/create-tablet.php">Transaction</a></li>
			<li><a href="#">Product</a></li>
			<li><a href="#">Stock</a></li>
		</ul>
		
		<div class="notification">
			<button class="notif-bell"><i class="fa-solid fa-bell"></i></button>
		</div>

		<div class="user-dropdown">
			<button class="dropdown-button">Hello, User
				<i class="fa-solid fa-caret-down"></i>
			</button>
			<div class="user-content">
				<a href="#">Edit User</a>
				<a href="#">Log Out</a>
			</div>
		</div>
		
		<hr/>
	</div>
	
	<div class="page">
		<div class="vert-nav">
			<h3>
				<i class="fa-solid fa-bars"></i> Membership Management
			</h3>
			<h4>
				<a href="create-member.php">
					<i class="fa-solid fa-plus"></i> Create Member
				</a>
			</h4>
			<h4><a href="search-member.php">
					<i class="fa-solid fa-magnifying-glass"></i> Search Member
				</a>
			</h4>		
		</div>

		<div>
			<h3 class="title">Create Member</h3>
			<hr/>
			<form method="post">
				<fieldset class="column1">
					<label for="id">Member ID:</label><br>
					<input type="text" id="id" name="id"><br>

					<label for="name">Name:</label><br>
					<input type="text" id="name" name="name"><br>


					<label for="ic">IC Number:</label><br>
					<input type="text" id="ic" name="ic"><br>

					<label for="citizen">Citizenship:</label><br>
					<input type="text" id="citizen" name="citizen"><br>

					<label for="age">Age:</label><br>
					<input type="text" id="age" name="age"><br>
				</fieldset>

				<fieldset class="column2">
					<label for="gender">Gender:</label><br>
					<select id="gender" name="gender">
						<option value="male" selected>Male</option>
						<option value="female">Female</option>
					</select><br>

					<label for="dob">Date of Birth:</label><br>
					<input type="date" id="dob" name="dob"><br>

					<label for="contact">Contact Number:</label><br>
					<input type="text" id="contact" name="contact"><br>

					<label for="job">Occupation:</label><br>
					<input type="text" id="job" name="job"><br>

					<label for="address">Address:</label><br>
					<input type="text" id="address" name="address"><br>
				</fieldset>

				<fieldset class="column3">	
					<label for="member">Member Type:</label><br>
					<select id="member" name="member">
						<option value="normal" selected>Normal</option>
						<option value="permanent">Permanent</option>
						<option value="non-member">Non-member</option>
					</select><br>

					<label for="recommender-id">Recommender's ID:</label><br>
					<input type="text" id="recommender-id" name="recommender-id"><br> 

					<label for="recommender">Recommender's Name:</label><br>
					<input type="text" id="recommender" name="recommender"><br>

					<label for="accept-date">Date of Admission:</label><br>
					<input type="date" id="accept-date" name="accept-date1"><br>

					<label for="remarks">Remarks:</label><br>
					<textarea name="remarks"></textarea>
				</fieldset>

				<input type="submit" name="btn_submit" value="Submit"/>
			</form>
		</div>
	</div>
</body>
</html>
