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
			<li><a href="../members/create-member.php">Membership</a></li>
			<li><a href="create-tablet.php">Transaction</a></li>
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
				<i class="fa-solid fa-bars"></i> Transaction Management
			</h3>
			
			<div class="tablet-dropdown">
				<button class="tablet-dropdown">Memorial Tablet
					<i class="fa-solid fa-caret-down"></i>
				</button>
				<div class="tablet-content">
					<h4>
						<a href="create-tablet.php">
							<i class="fa-solid fa-plus"></i> Create Memorial Tablet
						</a>
					</h4>	
					<h4>
						<a href="search-tablet.php">
							<i class="fa-solid fa-magnifying-glass"></i> Search Memorial Tablet
						</a>
					</h4>
				</div>
			</div>
			
			<div class="blantern-dropdown">
				<button class="blantern-dropdown">Blessing Lantern
					<i class="fa-solid fa-caret-down"></i>
				</button>
				<div class="blantern-content">
					<h4>
						<a href="create-blantern.php">
							<i class="fa-solid fa-plus"></i> Create Blessing Lantern
						</a>
					</h4>	
					<h4>
						<a href="search-blantern.php">
							<i class="fa-solid fa-magnifying-glass"></i> Search Blessing Lantern
						</a>
					</h4>
				</div>
			</div>
			
			<div class="glantern-dropdown">
				<button class="glantern-dropdown">Guang-Ming Lantern
					<i class="fa-solid fa-caret-down"></i>
				</button>
				<div class="glantern-content">
					<h4>
						<a href="create-glantern.php">
							<i class="fa-solid fa-plus"></i> Create Guang-Ming Lantern
						</a>
					</h4>	
					<h4>
						<a href="search-glantern.php">
							<i class="fa-solid fa-magnifying-glass"></i> Search Guang-Ming Lantern
						</a>
					</h4>
				</div>
			</div>
		</div>

		<div>
			<h3 class="title">Blessing Lantern: View Transaction</h3>
			<a href="edit-blantern-transaction.php">
				<button class="edit-blantern-trans">
					<i class="fa-solid fa-pencil"></i> Edit Transaction
				</button>
			</a>
			
			<button class="delete-blantern-trans">
				<i class="fa-solid fa-trash-can"></i> Delete Transaction
			</button>
			<hr/>
			
			<div class="tablet-row">
				<div class="tablet-col1">
					<p>Lantern ID:</p>
					<p>Receipt Number (Blessing):</p>
					<p>Receipt Number (Votive):</p>
					<p>Receipt Date:</p>
				</div>
				<div class="tablet-col2">
					<p>Receipt Amount:</p>
					<p>Member ID:</p>
					<p>Recorded By:</p>
					<p>Remarks:</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>