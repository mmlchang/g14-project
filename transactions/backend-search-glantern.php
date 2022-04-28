<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
    include '../db/dbconnection.php';  
 
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
if(isset($_REQUEST["term"])){
    // Prepare a select statement
    $sql = "SELECT * FROM GLantern WHERE GLantern_id LIKE '%".$_REQUEST['term']."%'"; 
    if($stmt = mysqli_prepare($conn, $sql)){
        // Bind variables to the prepared statement as parameters
        /*
        mysqli_stmt_bind_param($stmt, "s", $param_term);
        
        // Set parameters
        $param_term = '%' . $_REQUEST["term"] . '%' . " OR member_name LIKE " .'%' . $_REQUEST["term"] . '%';  
        echo $stmt;
        */
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
            
            // Check number of rows in the result set
            if(mysqli_num_rows($result) > 0){
                // Fetch result rows as an associative array
                while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                    if(strpos($row["GLantern_id"], $_REQUEST['term'] ) !== false){
                        echo "<a href=view-glantern.php?GId=".$row["GLantern_id"]."><p>" . $row["GLantern_id"] . "</p></a>";
                    } 
                }
            } else{
                echo "<p>No matches found</p>";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
}
 
// close connection
mysqli_close($conn);
?>