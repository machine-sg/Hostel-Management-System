<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $roll = $_POST['student_roll_no'];
  $password = $_POST['pwd'];

  if (empty($roll) || empty($password)) {
    header("Location: ../index.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM Student WHERE Student_id = '$roll'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['Pwd']);
      if($pwdCheck == false){
        
        echo "<script>
        alert('Please enter correct password');
        window.location.href='../index.php';
        </script>";
        
      }
      else if($pwdCheck == true) {

        //session_start();
        $_SESSION['roll'] = $row['Student_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['department'] = $row['Dept'];
        $_SESSION['addr'] = $row['Address'];
        $_SESSION['dist'] = $row['Distance'];
        $_SESSION['income'] = $row['Income'];
        $_SESSION['gender'] = $row['Gender'];
        $_SESSION['hostel_id'] = $row['Hostel_id'];
        $_SESSION['room_id'] = $row['Room_id'];
        if(isset($_SESSION['department'])){
          //echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        
        echo "<script>
        alert('Logged in successfully!');
        window.location.href='../home.php';
        </script>";
      }
      else {
        header("Location: ../index.php?error=strangeerr");
        exit();
      }
    }
    else{
      
      echo "<script>
        alert('No user exist. Please sign up first!');
        window.location.href='../index.php';
        </script>";
    }
  }

}
else {
  header("Location: ../index.php");
  exit();
}
