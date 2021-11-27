<?php

if (isset($_POST['login-submit'])) {

  require 'config.inc.php';

  $username = $_POST['username'];
  $password = $_POST['pwd'];

  if (empty($username) || empty($password)) {
    header("Location: ../login-hostel_manager.php?error=emptyfields");
    exit();
  }
  else {
    $sql = "SELECT *FROM Hostel_Manager WHERE Username = '$username'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
      $pwdCheck = password_verify($password, $row['Pwd']);
      if($pwdCheck == false){
        
        echo "<script>
        alert('Wrong password!');
        window.location.href='../login-hostel_manager.php';
        </script>";
        exit();
      }
      else if($pwdCheck == true) {

        //session_start();
        $_SESSION['hostel_man_id'] = $row['Hostel_man_id'];
        $_SESSION['fname'] = $row['Fname'];
        $_SESSION['lname'] = $row['Lname'];
        $_SESSION['mob_no'] = $row['Mob_no'];
        $_SESSION['username'] = $row['Username'];
        $_SESSION['hostel_id'] = $row['Hostel_id'];
        $_SESSION['email'] = $row['Email'];
        $_SESSION['isadmin'] = $row['Isadmin'];
        $_SESSION['PSWD'] = $row['Pwd'];

        
        if(isset($_SESSION['username'])){
          //echo "<script type='text/javascript'>alert('Set')</script>";
        }
        else {
          echo "<script type='text/javascript'>alert('Not SET')</script>";
        }
        
        if($_SESSION['isadmin']==0){
          
          echo "<script>
          alert('Manager Login Successful!');
          window.location.href='../home_manager.php';
          </script>";
        }
        else {
          echo "<script>
          alert('Admin Log In Successful!');
          window.location.href='../admin/admin_home.php';
          </script>";
          
        }
      }
      else {
        header("Location: ../login-hostel_manager.php?error=strangeerr");
        exit();
      }
    }
    else{
     
      echo "<script>
      alert('No user exist!');
      window.location.href='../login-hostel_manager.php';
      </script>";
      exit();
    }
  }

}
else {
  header("Location: ../login-hostel_manager.php");
  exit();
}
