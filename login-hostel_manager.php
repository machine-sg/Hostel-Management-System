<!DOCTYPE html>
<html lang="en">

<head>
    <title>HMS</title>
   
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link href="web/css/style.css" rel="stylesheet" type="text/css" />
    
    <link href="web/css/fontawesome-all.css" rel="stylesheet" />
    
</head>


<body style="background: url(web/images/i.jpg) ;font-family: 'Times New Roman', serif;">
    <h1>Hostel Room Allocation System</h1>
    <div class=" w3l-login-form">
        <h2>Hostel-Manager/Admin Login</h2>
        <form action="includes/login-hm.inc.php" method="POST">

            <div class=" w3l-form-group">
                <label>Username:</label>
                <div class="group">
                    <i class="fas fa-user"></i>
                    <input type="text" class="form-control" name="username" placeholder="Username" required="required" />
                </div>
            </div>
            <div class=" w3l-form-group">
                <label>Password:</label>
                <div class="group">
                    <i class="fas fa-unlock"></i>
                    <input type="password" class="form-control" name="pwd" placeholder="Password" required="required" />
                </div>
            </div>
           
            <button type="submit" name="login-submit">Login</button>
        </form>
          <p class=" w3l-register-p">Login as<a href="index.php" class="register"> Student</a></p>
      
    </div>
    <footer>
        <p class="copyright-agileinfo"> &copy; 2021 MS Enagae Project | Design by Sayani</p>
    </footer>

</body>

</html>
