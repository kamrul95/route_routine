<!DOCTYPE html>
<html>
    <head>
    <title>Route Routine</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    <script src="signup.js"></script>
    </head>
    <body>
        <div style="width:100%">
            <div id="bg">
                <img src="../Data/123.jpg" alt="">
            </div>
            <form  action="tempInsert.php" method="POST" name="signup" style="width:36%;border:none">
                <div class="container">
                    <div class="clearfix">
                      <button type="button" class="signupbtn">Sign Up</button>
                    </div>
                    <div class="fake-input">
                        <input type="text"  onkeyup="verify(this)" placeholder="Choose an Id" name="id" id="id" required>
                        <img src="../Data/tick.svg" onkeyup="verify(this)" id="img" style="display:none" width=25/>
                        <img src="../Data/error-icon-4.jpg" onkeyup="verify(this)" id="img1" style="display:none" width=25/>
                    </div>
                    <span id="txtHint"></span>
                    <br>
                    <input type="radio" name="dept" value="cs" required> CS
                    <input type="radio" name="dept" value="cse" required> CSE
                    <input type="radio" name="dept" value="csse" required> CSSE
                    <input type="radio" name="dept" value="cis" required> CIS
                    
                    <div class="fake-input">
                        <input type="email" placeholder="Email Address" name="email" onkeyup="verify(this)" id="email" required>
                        <img src="../Data/tick.svg" onkeyup="verify(this)" id="eimg" style="display:none" width=25/>
                        <img src="../Data/error-icon-4.jpg" onkeyup="verify(this)" id="eimg1" style="display:none" width=25/>
                    </div>
                    
                    <div class="fake-input">
                        <input type="password" placeholder="Enter Password" name="pass" id="pass" onkeyup="verify(this)" required>
                        <img src="../Data/tick.svg" onkeyup="verify(this)" id="pimg" style="display:none" width=25/>
                        <img src="../Data/error-icon-4.jpg" onkeyup="verify(this)" id="pimg1" style="display:none" width=25/>
                    </div>
                    
                    <div class="fake-input">
                        <input type="password" placeholder="Repeat Password" name="cpass" id="cpass" onkeyup="verify(this)" required>
                        <img src="../Data/tick.svg" onkeyup="verify(this)" id="cimg" style="display:none" width=25/>
                        <img src="../Data/error-icon-4.jpg" onkeyup="verify(this)" id="cimg1" style="display:none" width=25/>
                    </div>
                    <p>By creating an account you agree to our <a href="#" style="color:black">Terms & Privacy</a>.</p>
                    <div class="clearfix">
                      <button type="submit" name="submit" class="continuebtn" id="sub" onclick="valid(this)" style="background-color:#7CC9D9;cursor: not-allowed" disabled >Continue</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>