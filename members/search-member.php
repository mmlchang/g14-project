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
			<li><a href="view-member.php">Membership</a></li> <!--experiment view-member without result for html/css testing-->
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
			<h3 class="title">Search Member</h3>
			<hr/>
			<form>
				<input type="text" id="search-member" name="search" placeholder="Search">
				
				<button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
		</div>
		
		<div>
			<!--div for search result-->
		</div>
	</div>
	
</body>
</html>
