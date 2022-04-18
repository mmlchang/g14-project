<?php
    include '../db/dbconnection.php';  
// Check connection 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
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
			<h3 class="title">View Member</h3>
			<hr/>
			<?php 
			$M_ID = $_GET['Id'];
    		$sql = "SELECT * FROM member WHERE member_id = '".$M_ID."'"; 	 
    		$result = $conn->query($sql);  
			if (mysqli_num_rows($result) > 0) {
  			// output data of each row
  				while($row = mysqli_fetch_array($result)){ 
			?>
			<div class="member-row">
				<div class="member-col1">
					<p>Member ID: <?php echo $row['member_id'] ?></p>
					<p>Name: <?php echo $row['member_name'] ?> </p>
					<p>IC Number: <?php echo $row["member_ic"] ?></p>
					<p>Citizenship: <?php echo $row["member_citizenship"] ?></p>
					<p>Age: <?php echo $row["member_age"] ?></p>
					<p>Gender: <?php echo $row["member_gender"] ?></p>
					<p>Date of Birth: <?php echo $row["member_dob"] ?></p>
					<p>Contact Number: <?php echo $row["member_tel"] ?></p>
				</div>
				<div class="member-col2">
					<p>Occupation: <?php echo $row["member_job"] ?></p>
					<p>Address: <?php echo $row["member_address"] ?></p>
					<p>Member Type: <?php echo $row["member_type"] ?></p>
					<p>Recommender's Name: <?php echo $row["recommender_name"] ?></p>
					<p>Recommender's ID: <?php echo $row["recommender_id"] ?></p>
					<p>Date of Admission: <?php echo $row["accept_date"] ?></p>
					<p>Recorded By: <?php?></p>
					<p>Remarks <?php echo $row["remarks"] ?>:</p>
				</div>
			</div> 
			<a href="edit-member.php?Id=<?php echo $row['member_id']?>">
				<button class="edit-member">
					<i class="fa-solid fa-pencil"></i> Edit Member
				</button>
			</a>
			<a href="delete-member.php?Id=<?php echo $row['member_id']?>">
				<button class="edit-member">
					<i class="fa-solid fa-trash-can"></i> Delete Member
				</button>
			</a>
			
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
