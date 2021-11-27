<?php

if (isset($_POST['hm_signup_submit'])) {

  require 'config.inc.php';

  $username= $_POST['hm_uname'];
  $fname = $_POST['hm_fname'];
  $lname = $_POST['hm_lname'];
  $mobile = $_POST['hm_mobile'];
  $hostel_name = $_POST['hostel_name'];
  $email = $_POST['Email'];
  $password = $_POST['pass'];
  $cnfpassword = $_POST['confpass'];
  $isadmin = $_POST['isadmin'];


  if(!preg_match("/^[a-zA-Z0-9]*$/",$username)){
    header("Location: ../hm_signup.php?error=invalidusername");
    exit();
  }
  else if($password !== $cnfpassword){
    header("Location: ../hm_signup.php?error=passwordcheck");
    exit();
  }
  else {

    $sql = "SELECT Username FROM Hostel_Manager WHERE Username=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../hm_signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $username);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      

      if ($resultCheck > 0) {
        header("Location: ../hm_signup.php?error=userexists");
        exit();
      }
      else {
        $sql = "INSERT INTO Hostel_Manager (Username, Fname, Lname, Mob_no, Hostel_id, Email, Pwd, Isadmin) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../hm_signup.php?error=sqlerror");
          exit();
        }
        else {

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "ssssssss",  $username, $fname, $lname, $mobile, $hostel_name, $email, $hashedPwd, $isadmin);
          mysqli_stmt_execute($stmt);
          header("Location: ../login-hostel_manager.php?hm_signup=success");
          exit();
        }
      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ../hm_signup.php");
  exit();
}
