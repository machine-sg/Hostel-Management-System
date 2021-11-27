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
<body style="background: white">
	<div class="container">
		<div class="row">
			<div class="col-md-7 col-12">
				<img src="../web_home/images/logo.png" style="width: 40%; height: 120px" >
			</div>
		</div>
	</div>
	<div style="background: url(../web_home/images/3.jpg) ;font-family: 'Times New Roman', serif;">
	
		<div class="banner" id="home">
			<div class="cd-radial-slider-wrapper">
				<header style="background-color: rgba(2, 48, 32, 0.6)">
					<div class="container agile-banner_nav">
						<nav class="navbar navbar-expand-lg navbar-light bg-light">

							<h1><a class="navbar-brand" href="admin_home.php">HMS <span class="display"> </span></a></h1>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>

							<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto">
									<li class="nav-item">
										<a class="nav-link" href="admin_home.php">Home <span class="sr-only">(current)</span></a>
									</li>
          							<li class="nav-item">
										<a class="nav-link" href="create_hm.php">Appoint/Remove Hostel Manager</a>
									</li>
          
									<li class="nav-item">
										<a class="nav-link" href="students.php">Students</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="admin_contact.php">Contact</a>
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
			
					</div>
					<div id="wrapper" class="w3ls_wrapper w3layouts_wrapper">
						<div id="steps" style="margin:0 auto;" class="agileits w3_steps">
							<form id="formElem" name="formElem" action="#" method="post" class="w3_form w3l_form_fancy">
								<fieldset class="step agileinfo w3ls_fancy_step">
									<legend style="color:rgb(233, 116, 81)">Personal Info</legend>
									<div class="abt-agile">
										<div class="abt-agile-left">
										</div>
										<div class="abt-agile-right">

											<h3><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></h3>
											<h5 style="color:rgb(233, 116, 81)">Admin</h5>
											<ul class="address">
												<li>
													<ul class="address-text">
														<li><b>Username </b></li>
														<li>: <?php echo $_SESSION['username']; ?></li>
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
														<li><b>Email </b></li>
														<li>: <?php echo $_SESSION['email']; ?></li>
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
				<br><br><br>
			</div>	
		</div>		
		<script type="text/javascript" src="../web_profile/js/smoothbox.jquery2.js"></script>
	</div>
</body>
</html>
