<?php
session_start();
    if ($_SESSION["id"]==null && $_SESSION["psw"]==null){
        header("Location:signin.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
    <title>Add Courses</title>
    <link rel="stylesheet" type="text/css" href="signup.css">
    
    <script src="signup.js"></script>
    </head>
    <body>
        <div style="width:100%">
            <form  action="confirmAddCourses.php" method="POST" name="signup" style="width:36%;border:none">
                <div class="container" style="background-color: firebrick">
                    <div class="clearfix">
                      <button type="button" class="signupbtn">Add Courses</button>
                    </div>
                    <div class="fake-input">
                        <input type="text"  onkeyup="verify(this)" placeholder="Course Code" name="code" id="code" required>
                        
                    </div>
                    
                    <div class="fake-input">
                        <input type="text" placeholder="Course Name" name="name" onkeyup="verify(this)" id="name" required>
                    </div>
                    
                    <div class="fake-input">
                        <input type="text" placeholder="Enter Prerequisite" name="prerequisite" id="prerequisite" onkeyup="verify(this)" >
                        
                    </div>
                    
                    <div class="fake-input">
                        <input type="number" style="padding: 12px 20px;
    margin: 8px 0;" placeholder="Enter Number of Credit" name="credit" id="credit"onkeyup="verifyNumber()" required>
                        
                    </div>
                    
                    <div class="clearfix">
                      <button style="width: 50%" type="submit" name="submit" class="continuebtn" id="sub">Continue</button>
                    	<button style="width: 50%;background-color: tomato" type="submit" name="submit"  class="cancelbtn" id="cancel"><a style="text-decoration: none;color: white;font-family: fantasy;
        					font-size: 26px;"  href="admin.php"> Cancel</a></button>
                    </div>
                    
                </div>
            </form>
        </div>
        
    </body>
</html>