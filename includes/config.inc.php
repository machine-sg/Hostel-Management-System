<?php
  session_start();
  $servername = "localhost"; //change this  accordingly
  $dBUsername = "root";
  $dBPassword = "";
  $dBName = "hostel_management_system";
 
  $conn=mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

  if (!$conn) {
    die("Connection Failed: error");
  }
  
?>
