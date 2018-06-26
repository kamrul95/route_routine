<!DOCTYPE html>
<html>
    <head>
    <title>Route Routine</title>
    <link rel="stylesheet" type="text/css" href="signin.css">
    </head>
    <body>
        <div style="width:100%">
            <div id="bg">
                <img src="../Data/123.jpg" alt="">
            </div>
            <form action="checksignin.php" method="POST" style="width:36%;border:none">
                <div class="container">
                    <div class="clearfix">
                      <button type="button" class="signinbtn">Sign In</button>
                    </div>
                    
                    <input type="text" placeholder="User Name" name="id" required>
                    
                    <input type="password" placeholder="Enter Password" name="psw" required>

                    <p><a href="#" style="color:black">Forgot Password?</a></p>
                    
                    <p><a href="signup.php" style="color:black">Create an Account</a></p>
                    <div class="clearfix">
                      <button type="submit" class="continuebtn">Continue</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>