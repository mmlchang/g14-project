<?php 
include '../db/dbconnection.php';  
if(isset($_POST['btn_submit'])){ 
	$sql = "INSERT INTO GLantern (GLantern_id, contact_num, remarks, receipt_num , receipt_date, price) VALUES ('".$_POST['gl-id']."','".$_POST['contact']."','".$_POST['remarks']."','".$_POST['receipt-num']."','".$_POST['receipt-date']."','".$_POST['receipt-amount']."')"; 
	echo $sql;
	if (mysqli_query($conn, $sql)) { 
		$ssql = "INSERT INTO Booking (member_id , book_date , GLantern_id) VALUES ('".$_POST['member-id']."','".date("Y/m/d")."','".$_POST['gl-id']."')";
		if (mysqli_query($conn, $ssql)) {
    		echo "<script>alert('The information is added');window.location.href</script>";
		} else {
			echo "Member is not exist";
		} 
	} else {
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
			<h3 class="title">Guang-Ming Lantern: Create Details</h3>
			<hr/>
			<form method="post">
				<fieldset class="gl-column1">
					<label for="gl-id">Lantern ID:</label><br>
					<input type="text" id="gl-id" name="gl-id"><br>

					<label for="receipt-num">Receipt Number:</label><br>
					<input type="text" id="receipt-num" name="receipt-num"><br>
					
					<label for="receipt-date">Receipt Date:</label><br>
					<input type="date" id="receipt-date" name="receipt-date"><br>

					<label for="contact">Contact Number:</label><br>
					<input type="text" id="contact" name="contact"><br> 
				</fieldset>
				
				<fieldset class="gl-column2">
					<label for="receipt-amount">Receipt Amount:</label><br>
					<input type="text" id="receipt-amount" name="receipt-amount" placeholder="RM"><br>
					
					<label for="member-id">Member ID:</label><br>
					<input type="text" id="member-id" name="member-id"><br>

					<label for="remarks">Remarks:</label><br>
					<textarea name="remarks"></textarea>
				</fieldset>

				<input type="submit" name="btn_submit" value="Submit"/>
			</form>
		</div>
	</div>
</body>
</html>
