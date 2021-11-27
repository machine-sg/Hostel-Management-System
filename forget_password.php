<?php

 require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> HMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	
	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> 
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> 
	
</head>

<body style="font-family: 'Times New Roman', serif;">


<div class="inner-page-banner" id="home"> 	   
<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">
					<img src="web_home/images/logo.png" style="width: 40%; height: 120px" >
				</div>
				
			</div>
		</div>
</div>

<section class="contact py-5">
	<div class="container">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Contact  </h2>
			<div class="mail_grid_w3l">
				<form action="forget_password.php" method="post">
					<div class="row">
						<div class="col-md-2 contact_left_grid" data-aos="fade-left"  style="color:rgb(105,105,105);font-weight:bolder">
						<p>Name:</p><br><br>
                        <p>Student Roll Number:<p><br><br>
						<p>New Password:</p>
						</div>
						<div class="col-md-4 contact_left_grid" data-aos="fade-right" >
							
							<div class="contact-fields-w3ls">
							<input type="text" name="name" placeholder="Name"  required="">
							</div>
							<div class="contact-fields-w3ls">
							<input type="text" name="id" placeholder="Student Roll Number"  required="" >
							</div>
							<div class="contact-fields-w3ls">
							<input type="password" name="npwd" placeholder="New Password" required="">
							</div>
						</div>
						
						<div class="col-md-6 contact_left_grid" data-aos="fade-left">
							
							<input type="submit" name="submit" value="Submit">
						</div>
					</div>

				</form>
			</div>
		
	</div>
</section><br><br>

</body>
</html>

<?php
if(isset($_POST['submit'])){
	
    $roll = $_POST['id'];
    $new_pass = $_POST['npwd'];
    
    $sql = "SELECT * FROM Student WHERE Student_id = '$roll'";
    $result = mysqli_query($conn, $sql);
    if($row = mysqli_fetch_assoc($result)){
        $pwdCheck = password_verify($new_pass, $row['Pwd']);
        if($pwdCheck == false){
            $hashedPwd = password_hash($new_pass, PASSWORD_DEFAULT);

            $query = "UPDATE Student SET Pwd = '$hashedPwd' WHERE Student_id = '$roll'";
            $result2 = mysqli_query($conn, $query);
            if($result2){
                echo "<script type='text/javascript'>alert('Password Updated Successfully!'); window.location.href='index.php';</script>";
            }
            else{
                echo "<script type='text/javascript'>alert('Updation failed!!! Try again.')</script>";
            }
        }
        else{
            echo "<script type='text/javascript'>alert('You have added same password!'); window.location.href='index.php';</script>";
        }
    }
    
}


?>