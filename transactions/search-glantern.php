<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://kit.fontawesome.com/b41521ee1f.js"></script>
	<link rel="stylesheet" href="../styles/style.css">
	<link rel="icon" type="image/x-icon" href="#">
	<title>Tze Yin Membership Management Portal</title>

<style> 
    /* Formatting search box */
    .search-box{
        width: 300px;
        position: relative;
        display: inline-block;
        font-size: 14px;
    }
    .search-box input[type="text"]{
        height: 32px;
        padding: 5px 10px;
        border: 1px solid #CCCCCC;
        font-size: 14px;
    }
    .result{
        position: absolute;        
        z-index: 999;
        top: 100%;
        left: 0;
    }
    .search-box input[type="text"], .result{
        width: 100%;
        box-sizing: border-box;
    }
    /* Formatting result items */
    .result p{
        margin: 0;
        padding: 7px 10px;
        border: 1px solid #CCCCCC;
        border-top: none;
        cursor: pointer;
    }
    .result p:hover{
        background: #f2f2f2;
    }
</style>
<script src="../script/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $('.search-box input[type="text"]').on("keyup input", function(){
        /* Get input value on change */
        var inputVal = $(this).val();
        var resultDropdown = $(this).siblings(".result");
        if(inputVal.length){
            $.get("backend-search-glantern.php", {term: inputVal}).done(function(data){
                // Display the returned data in browser
                resultDropdown.html(data);
            });
        } else{
            resultDropdown.empty();
        }
    });
    
    // Set search input value on click of result item
    $(document).on("click", ".result p", function(){
        $(this).parents(".search-box").find('input[type="text"]').val($(this).text());
        $(this).parent(".result").empty();
    });
});
</script>
</head>

<body>
	<div>
		<a href="../index.php">
			<img src="../images/logo.jpg" alt="Home" class="logo">
		</a>

		<ul class="nav">
			<li><a href="../members/create-member.php">Membership</a></li>
			<li><a href="view-glantern.php">Transaction</a></li> <!--experiment view-member without result for html/css testing-->
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
		
    	<div class="search-box">
        	<input type="text" autocomplete="off" placeholder="Search Lantern ID " />
        	<div class="result"></div>
    	</div> 
	</div>
	
</body>
</html>