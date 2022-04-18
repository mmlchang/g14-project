<?php
    include '../db/dbconnection.php';  
// Check connection 
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 
$sql = "DELETE * FROM member WHERE member_id='".$_GET['Id']."'"; 
  if ($conn->query($sql) === TRUE) {
      echo "<script>alert('The member information is deleted');location='search-member.php'</script>";
  } 
  else {
    echo "Error updating record: " . $conn->error; 
      echo "<script>alert('Please try again!');location=search-member.php</script>"; 
   }
?>