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
			<a href="edit-member.php">
				<button class="edit-member">
					<i class="fa-solid fa-pencil"></i> Edit Member
				</button>
			</a>
			
			<button class="delete-member">
				<i class="fa-solid fa-trash-can"></i> Delete Member
			</button>
			<hr/>
			
			<div class="member-row">
				<div class="member-col1">
					<p>Name:</p>
					<p>Member ID:</p>
					<p>IC Number:</p>
					<p>Citizenship:</p>
					<p>Age:</p>
					<p>Gender:</p>
					<p>Date of Birth:</p>
					<p>Contact Number:</p>
				</div>
				<div class="member-col2">
					<p>Occupation:</p>
					<p>Address:</p>
					<p>Member Type:</p>
					<p>Recommender's Name:</p>
					<p>Recommender's ID:</p>
					<p>Date of Admission:</p>
					<p>Recorded By:</p>
					<p>Remarks:</p>
				</div>
			</div>
		</div>
	</div>
	
</body>
</html>
