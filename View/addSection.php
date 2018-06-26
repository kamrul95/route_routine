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
    <link rel="stylesheet" type="text/css" href="addSection.css">
    
    </head>
    <body>
        <div style="width:100%">
            <form  action="confirmAddSection.php" method="POST" name="signup" style="width:36%;border:none">
                <div class="container" style="background-color: firebrick">
                    <div class="clearfix">
                      <button type="button" class="signupbtn">Add Section</button>
                    </div>
                    <div class="fake-input">
                        <input type="text"  placeholder="Course Code" name="code" id="code" required>
                        
                    </div>
                    
                    <div class="fake-input">
                        <input type="text" placeholder="Course Status" name="status" id="status" required>
                    </div>
                    
                    <div class="fake-input">
                        <input type="number" style="padding: 5px 20px;
    margin: 8px 0;" placeholder="Enter Capacity" name="capacity" id="capacity" required>
                    
                    <div class="fake-input">
                        <input type="number" style="padding: 5px 20px;
    margin: 8px 0;" placeholder="Enter count" name="count" id="count" required>
                        
                    </div>
                    <div class="fake-input">
                        <input type="text" placeholder="Course Title" name="title" id="title" required>
                    </div>

                    <div class="fake-input">
                        <input type="text" placeholder="Course Type" name="type" id="type" required>
                    </div>

                    <div class="fake-input">
                        <input type="text" placeholder="First Class day" name="day1" id="day1" required>
                    </div>

                    <div class="fake-input">
                        <input type="text" placeholder="First Day Class Starting time" name="time1"  id="time1" required>
                    </div>

                    <div class="fake-input">
                        <input type="text" placeholder="First Day Class Ending time" name="time2" id="time2" required="" >
                    </div>

                    <div class="fake-input">
                        <input type="text" placeholder="Second Class day" name="day2"  id="day2" >
                    </div>

                    <div class="fake-input">
                        <input type="text" placeholder="Second day Class Start time " name="time3" id="time3" >
                    </div>

                    <div class="fake-input">
                        <input type="text" placeholder="Second day Class Ending time" name="time4" id="time4" >
                    </div>


                    <div class="clearfix">
                      <button style="width: 50%" type="submit" name="submit" class="continuebtn" id="sub">Add</button>
                    	<button style="width: 50%;background-color: tomato" type="submit" name="submit"  class="cancelbtn" id="cancel"><a style="text-decoration: none;color: white;font-family: fantasy;
        					font-size: 26px;"  href="admin.php"> Cancel</a></button>
                    </div>
                    
                </div>
            </form>
        </div>
        
    </body>
</html>