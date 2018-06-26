<?php
    require("jsondb.php");
?>
<?php           
        session_start();
        $code=$_GET['code'];
        $_SESSION["code"]=$code;
        $sql="SELECT *FROM courselist WHERE code='$code'";
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
    <link rel="stylesheet" type="text/css" href="signup.css">
    
    <script src="signup.js"></script>
    </head>
    <body>
        <div style="width:100%">
            <form  action="confirmUpdateCourses.php" method="POST" name="signup" style="width:36%;border:none">
                <div class="container" style="background-color: firebrick">
                    <div class="clearfix">
                      <button type="button" class="signupbtn">Update Courses</button>
                    </div>
                    <div class="fake-input">
                        <input type="text"  onkeyup="verify(this)" value="<?php echo $jsn[$i]->code ;?>" name="code" id="code" required>
                        
                    </div>
                    
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->coursename ;?>" name="name" onkeyup="verify(this)" id="name" required>
                    </div>
                    
                    <div class="fake-input">
                        <input type="text" value="<?php echo $jsn[$i]->prerequisite ;?>" name="prerequisite" id="prerequisite" onkeyup="verify(this)" >
                        
                    </div>
                    
                    <div class="fake-input">
                        <input type="number" style="padding: 12px 20px;
    					margin: 8px 0;" value="<?php echo $jsn[$i]->credit ;?>" name="credit" id="credit"onkeyup="verifyNumber()" required>
                        
                    </div>
                    
                    <div class="clearfix">
                      <button type="submit" name="submit" class="continuebtn" id="sub">Update</button>
                    </div>
                    <div class="clearfix">
                      <button type="submit" name="submit" class="continuebtn" id="cancel"><a style="text-decoration: none;color: white;font-family: fantasy;
        					font-size: 26px;"  href="admin.php"> Cancel</a></button>
                    </div>
                </div>
            </form>
        </div>
        <?php
    }
    ?>
    </body>
</html>