<?php

if (isset($_POST['signup-submit'])) {

  require 'config.inc.php';

  $roll = $_POST['student_roll_no'];
  $fname = $_POST['student_fname'];
  $lname = $_POST['student_lname'];
  $mail = $_POST['mail'];
  $mobile = $_POST['mobile_no'];
  $dept = $_POST['department'];
  $addr = $_POST['address'];
  $dist = $_POST['distance'];
  $income = $_POST['income'];
  $gender = $_POST['gender'];
  $password = $_POST['pwd'];
  $cnfpassword = $_POST['confirmpwd'];


  if(!preg_match("/^[a-zA-Z0-9]*$/",$roll)){
    header("Location: ../signup.php?error=invalidroll");
    exit();
  }
  else if($password !== $cnfpassword){
    
    echo "<script>
    alert('Password Mismatch');
    window.location.href='../signup.php';
    </script>";
  }
  else {

    $sql = "SELECT Student_id FROM Student WHERE Student_id=?";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
      header("Location: ../signup.php?error=sqlerror");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $roll);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $resultCheck = mysqli_stmt_num_rows($stmt);
      if ($resultCheck > 0) {
        
        echo "<script>
        alert('User Exits Already');
        window.location.href='../signup.php';
        </script>";
      }
      else {
        $sql = "INSERT INTO Student (Student_id, Fname, Lname, Email, Mob_no, Dept, Address, Distance, Income, Gender, Pwd) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql)){
          header("Location: ../signup.php?error=sqlerror");
          exit();
        }
        else {

          $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param($stmt, "sssssssiiss",$roll, $fname, $lname, $mail, $mobile, $dept, $addr, $dist, $income, $gender, $hashedPwd);
          mysqli_stmt_execute($stmt);
          
          echo "<script>
          alert('Signed up Successfully! Please Log in through your credentials');
          window.location.href='../index.php';
          </script>";
        }
      }
    }

  }
  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
else {
  header("Location: ../signup.php");
  exit();
}
