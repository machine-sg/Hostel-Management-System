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
        <form action="includes/signup.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Student Roll No</label>
                <div class="group">
                    <i class="fas fa-id-badge"></i>
                    <input type="text" class="form-control" name="student_roll_no" placeholder="Roll No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>First Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_fname" placeholder="First Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Last Name</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="student_lname" placeholder="Last Name" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Email</label>
                <div class="group">
                    <i class="fas fa-envelope"></i>
                    <input type="text" class="form-control" name="mail" placeholder="Email" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Mobile No</label>
                <div class="group">
                    <i class="fas fa-phone"></i>
                    <input type="text" class="form-control" name="mobile_no" placeholder="Mobile No" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Department</label>
                <div class="group">
                    <i class="fas fa-graduation-cap"></i>
                    <input type="text" class="form-control" name="department" placeholder="Department" required="required" />
                </div>
            </div>
            
            <div class=" w3l-form-group">
                <label>Address</label>
                <div class="group">
                    <i class="fas fa-address-card"></i>
                    <input type="text" class="form-control" name="address" placeholder="Address" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Distance from college(in km)</label>
                <div class="group">
                    <i class="fas fa-road"></i>
                    
                    <input type="number" class="form-control" name="distance" placeholder="Distance" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Income</label>
                <div class="group">
                    <i class="fas fa-rupee-sign"></i>
                    
                    <input type="number" class="form-control" name="income" placeholder="Income" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Gender</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <select name="gender" required="requiured">
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                        <option value="Prefer Not to Answer">Prefer Not to Answer</option>
                    </select>
                    
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Password</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>

            <div class=" w3l-form-group">
                <label>Confirm Password</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="confirmpwd" placeholder="Confirm Password" required="required" />
                </div>
            </div>
            
            <button type="submit" name="signup-submit">Sign Up</button>
        </form>
        <p class=" w3l-register-p">Already a member?<a href="index.php" class="register"> Login</a></p>
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2021 Web-Tech Project | Designed by Sayani-Soumili</p>
    </footer>

</body>

</html>
