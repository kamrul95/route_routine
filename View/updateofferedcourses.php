<?php
    require("jsondb.php");
?>
<?php           
        session_start();
        $code=$_GET['code'];
        $_SESSION["code"]=$code;
        $sql="SELECT *FROM offeredcourses WHERE code='$code'";
        $jsonData=getJSONFromDB($sql);
        $jsn=json_decode($jsonData);
        
        for($i=0;$i<sizeof($jsn);$i++){
        //echo $jsn[$i]->name." earned ".$jsn[$i]->cgpa;
        echo "<br>";
        
        
 ?>
<!DOCTYPE html>
<html>
    <head>
    <title>Add Courses</title>
    <link rel="stylesheet" type="text/css" href="offeredcourses.css">
    
    <script src="signup.js"></script>
    </head>
    <body>
        <div style="width:100%">
            <form  action="confirmUpdateOfferedCourses.php" method="POST" name="signup" style="width:36%;border:none">
                <div class="container" style="background-color: firebrick">
                    <div class="clearfix">
                      <button type="button" class="signupbtn">Update Offered Courses</button>
                    </div>
                    <div class="fake-input">
                        <input type="text"  onkeyup="verify(this)" value="<?php echo $jsn[$i]->code ;?>" name="code" id="code" required>
                        
                    </div>
                    
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->status ;?>" name="status" onkeyup="verify(this)" id="status" required>
                    </div>
                    
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->capacity ;?>" name="capacity" id="capacity" onkeyup="verify(this)" >
                        
                    </div>
                    
                    <div class="fake-input">
                        <input type="number" style="padding: 5px 20px;
    					margin: 8px 0;" value="<?php echo $jsn[$i]->count ;?>" name="count" id="count"onkeyup="verifyNumber()" required>
                    </div>

                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->title ;?>" name="title" id="title" onkeyup="verify(this)" >
                        
                    </div>

                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->type ;?>" name="type" id="type" onkeyup="verify(this)" >
                        
                    </div>

                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->day1 ;?>" name="day1" id="day1" onkeyup="verify(this)" >
                        
                    </div>

                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->time1 ;?>" name="time1" id="time1" onkeyup="verify(this)" >
                        
                    </div>
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->time2 ;?>" name="time2" id="time2" onkeyup="verify(this)" >
                        
                    </div>
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->day2 ;?>" name="day2" id="day2" onkeyup="verify(this)" >
                        
                    </div>
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->time3 ;?>" name="time3" id="time3" onkeyup="verify(this)" >
                        
                    </div>
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->time4 ;?>" name="time4" id="time4" onkeyup="verify(this)" >
                        
                    </div>
                    
                    <div class="clearfix">
                      <button type="submit" name="submit" class="continuebtn" id="sub">Update</button>
                    </div>
                    <div class="clearfix">
                      <button type="submit" name="submit" class="continuebtn" id="cancel"><a style="text-decoration: none;color: white;font-family: fantasy;
        					font-size: 20px;"  href="admin.php"> Cancel</a></button>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }
    ?>
    </body>
</html>