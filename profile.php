<?php
	require 'includes/config.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script src="web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="web_profile/js/sliding.form.js"></script>

	<link href="web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="web_profile/css/font-awesome.min.css" />
	<link rel="stylesheet" href="web_profile/css/smoothbox.css" type='text/css' media="all" />
	
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>


	<link href="web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

	<link rel="stylesheet" href="web_home/css_home/bootstrap.css"> 
	<link rel="stylesheet" href="web_home/css_home/style.css" type="text/css" media="all" /> 
	<link rel="stylesheet" href="web_home/css_home/fontawesome-all.css"> 

</head>

<body style="background:white">
	<<div class="container">
			<div class="row">
				<div class="col-md-7 col-12">
					<img src="web_home/images/logo.png" style="width: 40%; height: 120px" >
				</div>
				
			</div>
		</div>
	<div style="background: url(web_home/images/3.jpg);  font-family: 'Times New Roman', serif; ">
	
		<div class="banner" id="home">
			<div class="cd-radial-slider-wrapper">

	
	<header style="background-color: rgba(2, 48, 32, 0.6)">
		<div class="container agile-banner_nav">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">

				<h1><a class="navbar-brand" href="home.php"style="font-size:30px">HMS <span class="display"></span></a></h1>
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
							<a class="nav-link" href="message_user.php">Messages Received</a>
							
						</li>
						<li class="nav-item">
						<a class="nav-link" href="vacate_room_user.php">Vacate Room</a>
						</li>
						<li class="nav-item">
						    <a class="nav-link" href="due_payment.php">Pay Due</a>
					    </li>
						<li class="dropdown nav-item">
							
								<li>
									<a href="includes/logout.inc.php" class="nav-link">Logout</a>
								</li>
							
						</li>
					</ul>
				</div>

			</nav>
		</div>
	</header>
	
<br><br><br><br><br>
	<div class="main">
		<div id="navigation" style="display:none;" class="w3_agile">
			<ul>
				<li class="selected">
					<a href="#"><i class="fa fa-list-ul" aria-hidden="true"></i><span>Info</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-folder" aria-hidden="true"></i><span>Hostel</span></a>
				</li>
				<li>
					<a href="#"><i class="fa fa-envelope" aria-hidden="true"></i><span>Manager</span></a>
				</li>
			</ul>
		</div>
		<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
			<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
				<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
					<fieldset class="step agileinfo w3ls_fancy_step">
						<legend>Personal Info</legend>
						<div class="abt-agile">
							<div class="abt-agile-left">
							</div>
							<div class="abt-agile-right">

								<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
								<h5>Student</h5>
								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>Roll No </b></li>
											<li>: <?php echo $_SESSION['roll']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>PHONE </b></li>
											<li>: <?php echo $_SESSION['mob_no']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>DEPT </b></li>
											<li>: <?php echo $_SESSION['department']; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>EMAIL </b></li>
											
											<?php
												$roll = $_SESSION['roll'];
												$sql0 = "SELECT * FROM Student WHERE Student_id = '$roll'";
												$result0 = mysqli_query($conn, $sql0);
												$row0 = mysqli_fetch_assoc($result0);
												$mail = $row0['Email'];
												
											?>
											<li>: <?php echo $mail; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>ADDRESS </b></li>
											
											<?php
												$roll = $_SESSION['roll'];
												$sql0 = "SELECT * FROM Student WHERE Student_id = '$roll'";
												$result0 = mysqli_query($conn, $sql0);
												$row0 = mysqli_fetch_assoc($result0);
												$addr = $row0['Address'];
												
											?>
											<li>: <?php echo $addr; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>GENDER </b></li>
											
											<?php
												$roll = $_SESSION['roll'];
												$sql0 = "SELECT * FROM Student WHERE Student_id = '$roll'";
												$result0 = mysqli_query($conn, $sql0);
												$row0 = mysqli_fetch_assoc($result0);
												$gen = $row0['Gender'];
												
											?>
											<li>: <?php echo $gen; ?></li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="clear"></div>
						</div>
				</fieldset>
				<fieldset class="step agileinfo w3ls_fancy_step">
					<legend>Hostel Info</legend>
					<div class="abt-agile">
						<div class="abt-agile-left-hostel">
						</div>
						<div class="abt-agile-right">

							<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
							<h5>Student</h5>
							<ul class="address">
								<li>
									<ul class="address-text">
										<li><b>HOSTEL </b></li>
										<?php
											$hostelId = $_SESSION['hostel_id'];
											if($hostelId == NULL){
												$hostelName = 'None';
											}
											else {
												$sql = "SELECT * FROM Hostel WHERE Hostel_id = '$hostelId'";
												$result = mysqli_query($conn, $sql);
												if($row = mysqli_fetch_assoc($result)){
													$hostelName = $row['Hostel_name'];
												}
												else {
													echo "<script type='text/javascript'>alert('Foreign Key Error-hostenName!!')</script>";
												}
											}
										 ?>


										<li>: <?php echo $hostelName; ?></li>
									</ul>
								</li>
								<li>
									<ul class="address-text">
										<li><b>ROOM NO </b></li>
										<?php
											$roomId = $_SESSION['room_id'];
											if($hostelId == NULL || $roomId == NULL){
												$roomNo = 'None';
											}
											else {
												$sql = "SELECT * FROM Room WHERE Room_id = '$roomId'";
												$result = mysqli_query($conn, $sql);
												if($row = mysqli_fetch_assoc($result)){
													$roomNo = $row['Room_No'];
												}
												else {
													echo "<script type='text/javascript'>alert('Foreign Key Error-roomNo!!')</script>";
												}
											}
										 ?>
										<li>: <?php echo $roomNo; ?></li>
									</ul>
								</li>
							</ul>
						</div>
							<div class="clear"></div>
					</div>
			</fieldset>
					
					<fieldset class="step agileinfo w3ls_fancy_step">
						<legend>Hostel Manager Info</legend>
						<div class="abt-agile">
							<div class="abt-agile-left">
							</div>
							<div class="abt-agile-right">
								<?php
									$Hid = $_SESSION['hostel_id'];
									$sql1 = "SELECT * FROM Hostel_Manager WHERE Hostel_id = '$Hid'";
									$result1 = mysqli_query($conn, $sql1);
									if($row1 = mysqli_fetch_assoc($result1)){
										$hmfname = $row1['Fname'];
										$hmlname = $row1['Lname'];
										$hmMob  = $row1['Mob_no'];
										$hmemail = $row1['Email'];
									}
									else {
										$hmfname = 'none';
										$hmlname = 'none';
										$hmMob  = 'none';
										$hmemail = 'none';
									}
								 ?>
								<h3><?php echo $hmfname." ".$hmlname; ?></h3>
								<h5>Manager</h5>
								<ul class="address">
									<li>
										<ul class="address-text">
											<li><b>PHONE </b></li>
											<li>: <?php echo $hmMob; ?></li>
										</ul>
									</li>
									<li>
										<ul class="address-text">
											<li><b>Email </b></li>
											<li>: <?php echo $hmemail; ?></li>
										</ul>
									</li>
								</ul>
							</div>
								<div class="clear"></div>
						</div>
				</fieldset>
				</form>
			</div>
		</div>

	</div>
	<br><br>
	<script type="text/javascript" src="web_profile/js/smoothbox.jquery2.js"></script>
</div>
</body>
</html>
