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
			<h3 class="title">Memorial Tablet: Edit Details</h3>
			<hr/>
			<form>
				<fieldset class="column1">
					<label for="tab-id">Tablet ID:</label><br>
					<input type="text" id="tab-id" name="tab-id"><br>

					<label for="inst-date">Installation Date:</label><br>
					<input type="date" id="inst-date" name="inst-date"><br>

					<label for="zone">Zone:</label><br>
					<input type="text" id="zone" name="zone"><br>

					<label for="tier">Tier:</label><br>
					<input type="text" id="tier" name="tier"><br>

					<label for="row">Row:</label><br>
					<input type="text" id="row" name="row"><br>
					
					<label for="ancestor">Ancestor Name:</label><br>
					<input type="text" id="ancestor" name="ancestor"><br>

					<label for="price">Price:</label><br>
					<input type="text" id="price" name="price" placeholder="RM"><br>
				</fieldset>

				<fieldset class="column2">
					<label for="tab-address">Address:</label><br>
					<input type="text" id="tab-address" name="tab-address"><br>

					<label for="contact1">Contact Number 1:</label><br>
					<input type="text" id="contact1" name="contact1"><br>

					<label for="contact2">Contact Number 2:</label><br>
					<input type="text" id="contact2" name="contact2"><br>
					
					<label for="payment">Payment Type:</label><br>
					<select id="payment" name="payment">
						<option value="Permanent" selected>Permanent</option>
						<option value="installation">Installation</option>
					</select><br>

					<label for="member-id">Member ID:</label><br>
					<input type="text" id="member-id" name="member-id"><br>

					<label for="remarks">Remarks:</label><br>
					<textarea name="remarks"></textarea>
				</fieldset>

				<input type="submit" value="Submit"/>
			</form>
		</div>
	</div>
</body>
</html>
