<?php
    include '../db/dbconnection.php';  
// Check connection 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE FROM booking WHERE GLantern_id='".$_GET['GId']."'";  
  if ($conn->query($sql) === TRUE) {
      //echo "<script>alert('The GLantern information is deleted');location='search-glantern.php'</script>";
      $sql = "DELETE FROM glantern WHERE GLantern_id='".$_GET['GId']."'";  
          if ($conn->query($sql) === TRUE) {
            echo "<script>alert('The GLantern information is deleted');location='search-glantern.php'</script>";
          } 
          else {
              echo "<script>alert('Please try again!');location=search-glantern.php</script>"; 
          }
  } 
  else {
        echo "<script>alert('Please try again!');location=search-glantern.php</script>"; 
   }
?>