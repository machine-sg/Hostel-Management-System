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
<style type="text/css">
	.card-header{
		padding: 15px;
		font-size: 30px;
	}
	.card-body{
		padding: 15px;
	}
	.card-footer{
		text-align: left;
		padding: 15px;
	}
</style>


<body style="font-family: 'Times New Roman', serif;">

<div class="inner-page-banner" id="home"> 	   
	
<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">
					<img src="web_home/images/logo.png" style="width: 40%; height: 120px" >
				</div>
				
			</div>
		</div>
	<header style="background-color: rgb(25, 25, 112)">
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<h1><a class="navbar-brand" href="home_manager.php">HMS <span class="display"></span></a></h1>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link" href="home_manager.php">Home <span class="sr-only">(current)</span></a>
						</li>
						
						<li class="nav-item">
						<a class="nav-link" href="allocate_room.php">Allocate Room</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="message_hostel_manager.php">Messages Received</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Rooms
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="allocated_rooms.php">Allocated Rooms</a>
							</li>
							<li>
								<a href="empty_rooms.php">Empty Rooms</a>
							</li>
							<li>
								<a href="add_room.php">Add Rooms</a>
							</li>
							<li>
								<a href="vacate_rooms.php">Vacate Rooms</a>
							</li>
						</ul>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="contact_manager.php">Contact</a>
					</li>
					<li class="dropdown nav-item">
						<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><?php echo $_SESSION['username']; ?>
							<b class="caret"></b>
						</a>
						<ul class="dropdown-menu agile_short_dropdown">
							<li>
								<a href="admin/manager_profile.php">My Profile</a>
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

<br><br><br><br>

<?php
    $username = $_SESSION['username'];
    $hostel_man_id = $_SESSION['hostel_man_id'];
    $query = "SELECT * FROM Message WHERE receiver_id ='$hostel_man_id'";
    $result = mysqli_query($conn,$query);

    while ($row = mysqli_fetch_assoc($result)){ 
			$sender_id = $row['sender_id'];
			$query2 = "SELECT * FROM Hostel_Manager where Hostel_man_id = '$sender_id'"; 
			$result2 = mysqli_query($conn,$query2);
			
			if(mysqli_num_rows($result2)==0){
          ?> 

    <div class="container">
      <div class="card">
      <div class="card-header"><b>Subject: <?php echo $row['subject_h']; ?></b></div>
      <div class="card-body">Message: <?php echo $row['message']; ?></div> 
      <div class="card-footer">Sender: <?php echo $row['sender_id'] ?><span style="float: right"><?php echo $row['msg_date']." ".$row['msg_time']; ?></span></div>
  	  </div>
	</div>
	<br><br>
             
    <?php
	}
		else{
			$row2 = mysqli_fetch_assoc($result2);
			$admin_name = $row2['Fname']." ".$row2['Lname'];
				?>
				<div class="container">
					<div class="card">
					<div class="card-header"><b>Subject: <?php echo $row['subject_h']; ?></b></div>
					<div class="card-body">Message: <?php echo $row['message']; ?></div> 
					<div class="card-footer">Sender: Admin <?php echo $admin_name ?><span style="float: right"><?php echo $row['msg_date']." ".$row['msg_time']; ?></span></div>
					</div>
				</div>
				<br><br>
		<?php
		}
			
    } 

?>
<br>
<br>
<br>
<br>

<footer class="py-5" style="background:  rgb(25, 25, 112)">
	<div class="container py-md-3">
		<div class="footer"style="background: rgb(25, 25, 112)">
			<div class="row">
				
				<div class="col-12 col-sm-7 ">
					<div class="footer-logo mb-5 text-center">
						<a class="navbar-brand mb-2" href="https://www.iiests.ac.in/" target="_blank">IIEST <span class="display"> SHIBPUR</span></a>
					</div>
					<div class="row">
						<div class="col-4 col-sm-1">
							<ul class="footer-nav text-center">
								<li>
									<a href="home_manager.php">Home</a>
								</li>
								
								<li>
									<a href="allocate_room.php">Allocate</a>
								</li>
								<li>
									<a href="contact_manager.php">Contact</a>
								</li>
								<li>
									<a href="admin/manager_profile.php">Profile</a>
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
									<a href="mailto:sayanighosh5112000@gmail.com" style="color: white">sayanighosh5112000@gmail.com</a>
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
	<script src="web_home/js/snap.svg-min.js"></script>
	<script src="web_home/js/main.js"></script> 

	
	<script defer src="web_home/js/jquery.flexslider.js"></script>
	<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
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

