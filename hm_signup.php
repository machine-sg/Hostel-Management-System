<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS</title>
    
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    
</head>


<body style="background: url(web/images/h.jpg) ;font-family: 'Times New Roman', serif;">
    <h1>Hostel Room Allocation System</h1>
    <div class=" w3l-login-form">
        <h2>Sign Up Here</h2>
        <form action="includes/hm_signup.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Username</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="hm_uname" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>First Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="hm_fname" placeholder="First Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="hm_lname" placeholder="Last Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="hm_mobile" placeholder="Mobile No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Hostel Name</label>
                <div class="group">
                    <i class="fas fa-hostel"></i>
                    <input type="text" class="form-control" name="hostel_name" placeholder="Hostel Name" required="required" />
                </div>
            </div>
            

            <div class=" w3l-form-group">
                <label>Email:</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="Email" placeholder="Email" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Is Admin</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="number" class="form-control" name="isadmin" placeholder="Is Admin" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pass" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confpass" placeholder="Confirm Password" required="required" />
                </div>
            </div>
            
            <button type="submit" name="hm_signup_submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2021 MS Engage Project | Designed by Sayani</p>
    </footer>

</body>

</html>
