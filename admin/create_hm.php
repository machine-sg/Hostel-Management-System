<?php
		  require '../includes/config.inc.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>HMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
			function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script src="../web_profile/js/jquery-2.1.3.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="../web_profile/js/sliding.form.js"></script>

	<link href="../web_profile/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<link rel="stylesheet" href="../web_profile/css/font-awesome.min.css" />
	<link rel="stylesheet" href="../web_profile/css/smoothbox.css" type='text/css' media="all" />

	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>


	<link href="../web_home/css_home/slider.css" type="text/css" rel="stylesheet" media="all">

	<link rel="stylesheet" href="../web_home/css_home/bootstrap.css"> 
	<link rel="stylesheet" href="../web_home/css_home/style.css" type="text/css" media="all" /> 
	<link rel="stylesheet" href="../web_home/css_home/fontawesome-all.css"> 

	<link rel="stylesheet" href="../web_home/css_home/flexslider.css" type="text/css" media="screen" property="" />

</head>

<body style="background:white">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-12">
				<img src="../web_home/images/logo.png" style="width: 40%; height: 120px" >
			</div>	
		</div>
	</div>
	<div style="font-family: 'Times New Roman', serif;; background: url(../web_home/images/clock.jpg) ;">
	
		<div class="banner" id="home">
			<div class="cd-radial-slider-wrapper">

			<header style="background-color: rgba(2, 48, 32, 0.6)">
				<div class="container agile-banner_nav">
					<nav class="navbar navbar-expand-lg navbar-light bg-light">

						<h1><a class="navbar-brand" href="admin_home.php" style="font-size:30px">HMS <span class="display"></span></a></h1>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>

						<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
							<ul class="navbar-nav ml-auto">
								<li class="nav-item">
									<a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
								</li>
								<li class="nav-item active">
									<a class="nav-link" href="create_hm.php">Appoint/Remove Hostel Manager</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="students.php">Students</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="admin_contact.php">Contact</a>
								</li>
								<li class="dropdown nav-item">
									<a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">Hostel
										<b class="caret"></b>
									</a>
									<ul class="dropdown-menu agile_short_dropdown">
										<li>
											<a href="admin_services.php">Available Hostels</a>
										</li>
										<li>
											<a href="add_hostel.php">Add Hostel</a>
										</li>
									</ul>
								</li>
								<li class="dropdown nav-item">
									<li>
										<a href="../includes/logout.inc.php" class="nav-link">Logout</a>
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
						<a href="#"><i class="fa fa-check" aria-hidden="true"></i><span>Appoint</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-close" aria-hidden="true"></i><span>Remove</span></a>
					</li>
				</ul>
			</div>
			<div id="navigation" style="display:none;" class="w3_agile">

			</div>
			<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
				<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
					<form id="formElem" name="formElem" action="../includes/hm_signup.php" method="post" class="w3_form w3l_form_fancy">
					
			<fieldset class="step w3_agileits">
				<legend  style="color:rgb(8, 143, 143)">Appoint Hostel Manager</legend>
				<div class="agilecontactw3ls-grid">
				<div class="agile-con-centre">
					<form action="../includes/hm_signup.php" method="POST">
					<input type="text" name="hm_uname" placeholder="USERNAME" required="required">
					<input type="text" name="hm_fname" placeholder="FIRST NAME" required="required">
					<input type="text" name="hm_lname" placeholder="LAST NAME" required="required">
					<input type="text" name="hm_mobile" placeholder="MOBILE NO" required="required">
					<input type="text" name="hostel_name" placeholder="HOSTEL NAME" required="required">
					<input type="email" name="Email" placeholder="EMAIL" required="required">
					<input type="password" name="pass" placeholder="HOSTEL MANAGER'S PASSWORD" required="required">
					<input type="password" name="confpass" placeholder="CONFIRM HOSTEL MANAGER'S PASSWORD" required="required">

					<div class="send-button">
						<input type="submit" name="hm_signup_submit" style="background:rgb(0, 128, 128)">
					</div>
					</form>
				</div>
				<div class="clear"></div>
				</div>
			</fieldset>

			</form>
				<form id="formElem" name="formElem" action="../includes/hm_remove.php" method="post" class="w3_form w3l_form_fancy">
					<fieldset class="step w3_agileits">
					<legend>Remove Hostel Manager</legend>
					<div class="agilecontactw3ls-grid">
						<div class="agile-con-centre">
							<form action="../includes/hm_remove.php" method="POST">
								<input type="text" name="hm_uname" placeholder="USERNAME" required="required">
								<input type="text" name="hostel_name" placeholder="HOSTEL NAME" required="required">
								<input type="password" name="pass" placeholder="ADMIN PASSWORD" required="required">
								<div class="send-button">
									<input type="submit" name="hm_remove_submit">
								</div>
							</form>
						</div>
						<div class="clear"></div>
					</div>
					</fieldset>
				</form>

				</div>
			</div>
			
		</div>
		<script type="text/javascript" src="../web_profile/js/smoothbox.jquery2.js"></script>
	</div>
</body>
</html>
