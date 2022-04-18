<?php
    include '../db/dbconnection.php';  
// Check connection 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['btn_submit'])){
 
	$sql = "UPDATE member SET member_name = '".$_POST['name']."', member_ic = '".$_POST['ic']."', member_citizenship= '".$_POST['citizen']."', member_age= '".$_POST['age']."', member_gender= '".$_POST['gender']."', member_dob = '".$_POST['dob']."', member_tel = '".$_POST['contact']."', member_job = '".$_POST['job']."', member_address = '".$_POST['address']."',member_type = '".$_POST['member']."', recommender_id = '".$_POST['recommender-id']."', recommender_name = '".$_POST['recommender']."', accept_date = '".$_POST['accept-date']."', remarks = '".$_POST['remarks']."' WHERE member_id = '".$_GET['Id']."'"; 
	if ($conn->query($sql) === TRUE) {
    	echo "<script>alert('The member information is updated');window.location.href</script>";
	} 
	else {
	  echo "Error updating record: " . $conn->error; 
    	echo "<script>alert('Please try again!');window.location.href</script>"; 
   }
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

			<?php 
			$M_ID = $_GET['Id'];
    		$sql = "SELECT * FROM member WHERE member_id = '".$M_ID."'"; 	 
    		$result = $conn->query($sql);  
			if (mysqli_num_rows($result) > 0) {
  			// output data of each row
  				while($row = mysqli_fetch_array($result)){ 
			?>
			<h3 class="title">Edit Member</h3>
			<hr/>
			<form method="post">
				<fieldset class="column1">
					<label for="id">Member ID:</label><br>
					<input type="text" id="id" name="id" value="<?php echo $row['member_id']; ?>" disabled><br>

					<label for="name">Name:</label><br>
					<input type="text" id="name" name="name" value="<?php echo $row['member_name']; ?>"><br>

					<label for="ic">IC Number:</label><br>
					<input type="text" id="ic" name="ic" value="<?php echo $row['member_ic']; ?>"><br>

					<label for="citizen">Citizenship:</label><br>
					<input type="text" id="citizen" name="citizen" value="<?php echo $row['member_citizenship']; ?>"><br>

					<label for="age">Age:</label><br>
					<input type="text" id="age" name="age" value="<?php echo $row['member_age']; ?>"><br>
				</fieldset>

				<fieldset class="column2">
					<label for="gender">Gender:</label><br>
					<select id="gender" name="gender">
						<option value="male" <?php
							if($row['member_gender'] == "Male") 
								echo "selected";
						?>>Male</option>
						<option value="female"<?php
							if($row['member_gender'] == "Female") 
								echo "selected";
						?>>Female</option>
					</select><br>

					<label for="dob">Date of Birth:</label><br>
					<input type="date" id="dob" name="dob" value="<?php echo $row['member_dob']; ?>"><br>

					<label for="contact">Contact Number:</label><br>
					<input type="text" id="contact" name="contact" value="<?php echo $row['member_tel']; ?>"><br>

					<label for="job">Occupation:</label><br>
					<input type="text" id="job" name="job" value="<?php echo $row['member_job']; ?>"><br>

					<label for="address">Address:</label><br>
					<input type="text" id="address" name="address" value="<?php echo $row['member_address']; ?>"><br>
				</fieldset>

				<fieldset class="column3">	
					<label for="member">Member Type:</label><br>
					<select id="member" name="member">

						<option value="normal"<?php
							if($row['member_type'] == "Normal") 
								echo "selected";
						?>>Normal</option>
						<option value="permanent"
						<?php
							if($row['member_type'] == "Permanent") 
								echo "selected";
						?>>Permanent</option>
						<option value="non-member"<?php
							if($row['member_type'] == "Non-member") 
								echo "selected";
						?>>Non-member</option>
					</select><br>

					<label for="recommender">Recommender's Name:</label><br>
					<input type="text" id="recommender" name="recommender" value="<?php echo $row['recommender_name']; ?>"><br>

					<label for="recommender-id">Recommender's ID:</label><br>
					<input type="text" id="recommender-id" name="recommender-id" value="<?php echo $row['recommender_id']; ?>"><br>

					<label for="accept-date">Date of Admission:</label><br>
					<input type="date" id="accept-date" name="accept-date" value="<?php echo $row['accept_date']; ?>"><br>

					<label for="remarks">Remarks:</label><br>
					<textarea name="remarks"><?php echo $row['remarks']; ?></textarea>
				</fieldset>
				
				<input type="submit" value="Submit" name="btn_submit" />
			</form>

			<?php  
  				}
			}
			else{ 
    			echo "No record exists!!"; 
    		}
			?>
		</div>
	</div>
</body>
</html>
