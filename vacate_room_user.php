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
	<header style="background-color: rgb(2, 48, 32)">
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home.php" style="font-size:30px">HMS <span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="services.php">Hostels</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
						<li class="nav-item">
							
							<a class="nav-link" href="message_user.php">Message Received</a>
						</li>
						<li class="nav-item active">
						<a class="nav-link" href="vacate_room_user.php">Vacate Room</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="due_payment.php">Pay Due</a>
					    </li>
						<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['roll']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="profile.php">My Profile</a>
							</li>
							<li>
								<a href="includes/logout.inc.php">Logout</a>
							</li>
						</ul>
					</li>
					</ul>
				</div>
			  
			</nav>
		</div>
	</header>
	
</div>
<br><br>
<?php
    $roll = $_SESSION['roll'];
    $query = "SELECT * FROM Application WHERE Student_id ='$roll'";
    $result = mysqli_query($conn,$query);
    
    if(mysqli_num_rows($result)==0){
        echo '<h4> You have not applied for the hostel yet.</h4>';

    }
    else{
	$row = mysqli_fetch_assoc($result);
    $hostel_id = $row['Hostel_id'];
    $query1 = "SELECT * FROM Hostel WHERE Hostel_id = '$hostel_id'";
    $result1 = mysqli_query($conn,$query1);
    $row1 = mysqli_fetch_assoc($result1);
    $hostel_name = $row1['Hostel_name'];
    $application_status = $row['Application_status'];
    if($application_status == 1){
        echo '<h4> You have not been allotted to a hostel room yet.</h4>';
    }
    else{
    
?>
<section class="contact py-5">
	<div class="container">
		<h2 class="heading text-capitalize mb-sm-5 mb-4"> Application Form </h2>
			<div class="mail_grid_w3l">
				<form action="vacate_room_user.php" method="post">
					<div class="row">
						<div class="col-md-2 contact_left_grid" data-aos="fade-left"  style="color:rgb(105,105,105);font-weight:bolder">
						<p>Name:</p><br><br>
						<p>Roll Number:</p><br><br>
						<p>Hostel Name:</p><br><br>
						
						</div>
						<div class="col-md-5 contact_left_grid" data-aos="fade-right">
							<div class="contact-fields-w3ls">
								<input type="text" name="Name" placeholder="Name" value="<?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?>" required="" disabled="disabled">
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="roll_no" placeholder="Roll Number" value="<?php echo $_SESSION['roll']?>" required="" disabled="disabled">
							</div>
							<div class="contact-fields-w3ls">
								<input type="text" name="hostel" placeholder="Hostel Name" value="<?php echo $hostel_name;?>" required="">
							</div>
							
						</div>
						
						<div class="col-md-5 contact_left_grid" data-aos="fade-left">
							<input type="submit" name="vacate" value="Apply for Vacating Hostel">
						</div>
					</div>

				</form>
			</div>
		
	</div>
</section>
<?php } }?>
<br><br><br>

<footer class="py-5" style="background: rgb(2, 48, 32)">
	<div class="container py-md-3">
		<div class="footer"style="background: rgb(2, 48, 32)">
			<div class="row">
				
				<div class="col-12 col-sm-7 ">
					<div class="footer-logo mb-5 text-center">
						<a class="navbar-brand mb-2" href="https://www.iiests.ac.in/" target="_blank">IIEST <span class="display"> SHIBPUR</span></a>
					</div>
					<div class="row">
						<div class="col-4 col-sm-1">
							<ul class="footer-nav text-center">
								<li>
									<a href="home.php" >Home</a>
								</li>
								
								<li>
									<a href="services.php">Hostels</a>
								</li>
								<li>
									<a href="contact.php">Contact</a>
								</li>
								<li>
									<a href="profile.php">Profile</a>
								</li>
							</ul> 
						</div>
						<div class="col-7 offset-2 col-sm-6">
							<div style="color:white;">
									<h3>Our Address</h3>
									<address>
									Shibpur, Howrah<br>
									<i class="fa fa-phone fa-lg"></i>:(+91) 62967 86304<br>
									<i class="fa fa-envelope fa-lg"></i> : 
									<a href="mailto:sayanighosh5112000@gmail.com" style="color:white">sayanighosh5112000@gmail.com</a>
									</address>
							</div>		
						</div>
					</div>
					<div class="row">
					<div class="col-12 col-sm-7 align-self-center">
						<div style="color:white;">
								<div class="text-center">
									<a class="btn btn-social-icon btn-google" href="http://google.com/"><image src="web_home/images/google.png" height="30px" width="30px"></image></a>
									<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/"><image src="web_home/images/fb.png" height="30px" width="30px"></a>
									<a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/"><image src="web_home/images/ln.png" height="30px" width="30px"></a>
									<a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><image src="web_home/images/twitter.png" height="30px" width="30px"></i></a>
									<a class="btn btn-social-icon btn-google" href="http://youtube.com/"><image src="web_home/images/yt.png" height="30px" width="30px"></i></a>
									<a class="btn btn-social-icon" href="mailto:"><image src="web_home/images/gmail.png" height="30px" width="30px"></i></a>
								</div>
						</div>		
            		</div>
					</div>
				</div>
				<div class="col-12 col-sm-5" height="20px">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.638303979906!2d88.3049791142734!3d22.555218039294207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0279c91a8d2d49%3A0xc6ee508c74cf031d!2sIndian%20Institute%20of%20Engineering%20Science%20and%20Technology%2C%20Shibpur!5e0!3m2!1sen!2sin!4v1635442222559!5m2!1sen!2sin" width="600" height="50" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
				</div>
			</div>
			
			<div class="row justify-content-center">             
                    <div class="col-auto" style="color:white;">
                        <p>© Copyright 2021</p>
                    </div>
            </div>
			
		</div>
	</div>
</footer>

	<script type="text/javascript" src="web_home/js/jquery-2.2.3.min.js"></script>
	<script type="text/javascript" src="web_home/js/bootstrap.js"></script> 
	
	<script src="web_home/js/jquery.waypoints.min.js"></script>
	<script src="web_home/js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	
	<script src="web_home/js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="web_home/js/move-top.js"></script>
	<script type="text/javascript" src="web_home/js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	
	<script type="text/javascript">
		$(document).ready(function() {
			
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	
</body>
</html>

<?php
    if(isset($_POST['vacate'])){
        $roll2 = $_SESSION['roll'];
        $query2 = "SELECT * FROM Application WHERE Student_id = '$roll2'";
        $result2 = mysqli_query($conn,$query2);
        $row2 = mysqli_fetch_assoc($result2);
        $vacate_status = $row2['Vacate_status'];
        $payment_status = $row2['Payment_status'];
       
        
        if($payment_status == 0){
            echo "<script type='text/javascript'>alert('You have not paid the due payment. First pay that.')</script>";
        }
        else{
            if($vacate_status == 1){
                echo "<script type='text/javascript'>alert('You have already applied for vacating the room .')</script>";
            }
            else{
                $query3 = "UPDATE Application SET Vacate_status = '1' WHERE Student_id = '$roll2'";
                $result3 = mysqli_query($conn,$query3);
                if($result3){
                    echo "<script type='text/javascript'>alert('Application for vacating the room is successful.')</script>";
                }
                else{
                    echo "<script type='text/javascript'>alert('Application failed.')</script>";
                }
            }
        }
        
        exit();
    }
?>
   