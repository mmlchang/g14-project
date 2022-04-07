 <?php
// set the servername,username and password
 
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

// Create database
//mysqli_query() function performs a query against a database.
$sql = "CREATE DATABASE IF NOT EXISTS db_MMS";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . mysqli_error($conn);
} 

mysqli_close($conn);
 
?>