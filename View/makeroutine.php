
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Bachelor of Science in Computer Science and Engineering (BSc in CSE) | Faculty of Science &amp; Information Technology</title>
    <style>
        .checkboxFour {
            width: 30px;
            height: 30px;
            background: #ddd;
            margin: 0px 0px;

            border-radius: 100%;
            position: relative;
            box-shadow: 0px 1px 3px rgba(0,0,0,0.5);
        }
        .continuebtn{
            float: left;
            width: 100%;
            font-family: fantasy;
            font-size: 26px;
            background-color:bisque;
        }
        #myInput {
          background-image: url('../Data/search.png');
          background-color: azure;
          background-position: 6px 0px;
          background-repeat: no-repeat;
          width: 100%;
          font-size: 16px;
          padding: 12px 20px 12px 40px;
          border: 5px solid firebrick;
          margin-bottom: 12px;
        }
        input::placeholder{
            color: firebrick;
        }
        #myTable {
          border-collapse: collapse;
          width: 100%;
          border: 0px solid #ddd;
          font-size: 18px;
        }

        #myTable th, #myTable td {
          text-align: center;
          padding: 2px;
        }

        #myTable tr {
          border-bottom: 1px solid #ddd;
        }

        #myTable tr.header, #myTable tr:hover {
          background-color: #f1f1f1;
        }
         button {
            background-color: #428bca; 
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 20%;
            float: right;
        }
        .continuebtn1{
            float: right;
            width: 20%;
            font-family: fantasy;
            font-size: 26px;
            margin: 10px 0px;
        }
        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }
        
         .row{
              padding: 16px;
              margin-top: 30px;
              height: 120px; /* Used in this example to enable scrolling */
            }

    </style>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function insert(){
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					resp=xmlhttp.responseText;
                    alert(resp);
				}
			};
			var course = document.forms[0];
				var txt = "";
				var i;
                var count=0;
				for (i = 0; i < course.length; i++) {
					if (course[i].checked) {
                        //alert(course[i].value);
						txt =txt + course[i].value + ",";
                        ++count;
					}
				}
            alert(count);
			var url="insertCompletedCourses.php?code="+txt;
			xmlhttp.open("GET", url, true);
			xmlhttp.send();
		}
        
        function insertConstraint(){
			var xmlhttp = new XMLHttpRequest();
            document.getElementById("spinner").style.visibility= "visible";
			xmlhttp.onreadystatechange = function() {
				if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					resp=xmlhttp.responseText;
                    alert(resp);
				}
			};
			var course = document.forms[1];
           //alert($('input[name="startTime"]:checked').val());
				var txt = "";
				var i;
                var count=0;
				for (i = 0; i < course.length-2; i++) {
					if (course[i].checked) {
                        //alert(course[i].value);
						txt =txt + course[i].value + ",";
                        ++count;
					}
				}
            alert(txt);
			var url="insertConstraint.php?code="+txt;
			xmlhttp.open("GET", url, true);
			xmlhttp.send();
		}
        
        function myFunction() {
          var input, filter, table, tr, td, i;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          table = document.getElementById("myTable");
          tr = table.getElementsByTagName("tr");
          for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
              if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = "";
              } else {
                tr[i].style.display = "none";
              }
            }       
          }
        }
	</script>
</head>
<?php 
    session_start();
    if(isset($_SESSION['id'])){
?>
<body style="background-color:azure"> 
    <nav class="navbar navbar-default navbar-fixed-top topbar" style="background-color:aquamarine;float:left">
        <div class="topbar-container">
            <ul class="nav navbar-nav navbar-right" style="margin:5px;font-family: sans-serif;font-size:18px">
                <li><a href="../View/makeroutine.php" >Home</a></li>
                <li>
                    <a href="#" >Profile</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Options <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="/Student/Credential/ChangePassword">Change Password</a></li>
                    </ul>
                </li>
                <li><a href="signout.php">Logout</a></li>
            </ul>
        </div>
    </nav>
    
    <div class="row">
        <h1 class="header-title">Bachelor of Science in<br> Computer Science and Engineering<br>(BSc in CSE)</h1>
        <h3 style="text-align:center">[Select Your Completed/Ongoing Courses]</h3>
    </div>

    <div class="row">
        <div class="col-xs-12 col-xs-12 col-xs-12 text-justify pull-left">
            <div class="row">
                <div class="panel panel-default">
                   <button class="continuebtn" data-parent="#CourseOfferings" data-toggle="collapse" href="#ELECTIVES" style="text-decoration:none; text-align:center"><h2 class="panel-title">Click Here</h2></button>
                    <div class="panel-collapse collapse" id="ELECTIVES">
                        <form>
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for courses.." title="Type in a name">
                            <table id="myTable" >
                                <thead>
                                    <tr style="background-color: #338BC1; color: #EFEFEF;"><th>COURSE DESCRIPTION</th><th>CREDIT</th><th>CHECK</th></tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        require_once('jsondb.php');
                                        $id = $_SESSION['id'];
                                        $course = json_decode(getJSONFromDB("SELECT completedcourses from courseinfo WHERE studentid='$id'"));
                                        $ar=explode(",",$course[0]->completedcourses);
                                        
                                        $data = json_decode(getJSONFromDB("SELECT credit, coursename, code from courselist"));
                                        $j=0;
                                        for($i=0;$i<sizeof($data);++$i){
                                            if($ar[$j]==$data[$i]->code){
                                        ?>
                                            <tr><td><?php echo $data[$i]->coursename ?></td><td><?php echo $data[$i]->credit ?></td>
                                            <td><input type="checkbox" id="checkboxFourInput" class="checkboxFour" value="<?php echo $data[$i]->code ?>" checked></td></tr>
                                        <?php 
                                            ++$j;
                                            }
                                          else{
                                        ?>
                                            <tr><td><?php echo $data[$i]->coursename ?></td><td><?php echo $data[$i]->credit ?></td>
                                            <td><input type="checkbox" id="checkboxFourInput" class="checkboxFour" value="<?php echo $data[$i]->code ?>" ></td></tr>
                                        <?php 
                                            }  
                                        }
                                        ?>
                                </tbody>
                            </table>  
                            <div class="clearfix">
                                <button type="submit" class="continuebtn1" onclick="insert()" title="Click here to update your completed or ongoing courses">Update</button>
                            </div>
                        </form>
                    </div>
                    <?php 
                        if(sizeof($ar)==1){
                    ?>
                    <h3 style="text-align:center">[Available Courses for the Next Semester]</h3>
                        <button class="continuebtn" data-toggle="collapse" href="#ELECTIVES1" style="text-decoration:none; text-align:center; cursor:not-allowed" disabled title="Please Select your Completed or Onginng Course First"><h2 class="panel-title" name="ok" id="sub">Click Here</h2></button>
                    <?php } 
                        else{
                    ?>
                            <h3 style="text-align:center">[Available Courses for the Next Semester]</h3>
                        <button class="continuebtn" data-toggle="collapse" href="#ELECTIVES1" style="text-decoration:none; text-align:center"><h2 class="panel-title" name="ok" id="sub">Click Here</h2></button>
                    <?php }
                    ?>
                    <div class="panel-collapse collapse" id="ELECTIVES1">
                        <form name="avilCourses">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for courses.." title="Type in a name">
                            <table id="myTable" >
                                <thead>
                                    <tr style="background-color: #338BC1; color: #EFEFEF;"><th>COURSE DESCRIPTION</th><th>CREDIT</th><th>CHECK</th></tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        require_once('jsondb.php');
                                        $course = json_decode(getJSONFromDB("SELECT completedcourses from courseinfo WHERE studentid='$id'"));
                                        $ar=explode(",",$course[0]->completedcourses);
                                        
                                        $data = json_decode(getJSONFromDB("SELECT credit, coursename, code from courselist"));
                                        $k=0;
                                        for($l=0;$l<sizeof($data);++$l){
                                            if($ar[$k] == $data[$l]->code){ 
                                                ++$k;        
                                            }
                                            else{
                                                $c = $data[$l]->code;
                                                $pre = json_decode(getJSONFromDB("SELECT prerequisite from courselist WHERE code='$c'"));
                                                $arPre=explode(",",$pre[0]->prerequisite);
                                                
                                                    if(sizeof($arPre)>=2 ){
                                                        if(strpos($course[0]->completedcourses, $arPre[0])!==false || strpos($course[0]->completedcourses, $arPre[1])!==false){
                                                            ?>
                                                            <tr><td><?php echo $data[$l]->coursename ?></td><td><?php echo $data[$l]->credit ?></td>
                                                            <td><input type="checkbox" id="checkboxFourInput" class="checkboxFour" value="<?php echo $data[$l]->code ?>"></td></tr>
                                                            <?php 
                                                        }
                                                    }
                                                    else{
                                                        if($arPre[0]!=null){
                                                            if(strpos($course[0]->completedcourses, $arPre[0])!==false){
                                                                ?>
                                                                <tr><td><?php echo $data[$l]->coursename ?></td><td><?php echo $data[$l]->credit ?></td>
                                                                <td><input type="checkbox" id="checkboxFourInput" class="checkboxFour" value="<?php echo $data[$l]->code ?>"></td></tr>
                                                                <?php 
                                                            }
                                                        }
                                                        else if($arPre[0]==NULL){
                                                             ?>
                                                                <tr><td><?php echo $data[$l]->coursename ?></td><td><?php echo $data[$l]->credit ?></td>
                                                                <td><input type="checkbox" id="checkboxFourInput" class="checkboxFour" value="<?php echo $data[$l]->code ?>"></td></tr>
                                                            <?php 
                                                        }
                                                }
                                            }
                                        }
                                       
                                        ?>
                                </tbody>
                            </table>
                            <div class="container">
                            <h3 style="font-family: fantasy;">Select Your Desire Time and Off Time between Two classes...</h3>
                                <ul>
                                    <li><h4><i>When you want to start your class?</i></h4></li>
                                    <ul>
                                        <input type="radio" id="checkStTime1" name = "startTime" class="" value="Morning"><h4 style="display:inline">  Morning(8:00 - 11:00)</h4><br>
                                        <input type="radio" id="checkStTime1" name="startTime" class="" value="Midday"><h4 style="display:inline">  Mid Day(12:00 - 5:00)</h4><br>
                                    </ul>
                                        <li><h4><i>Off Time between two classes...</i></h4></li>
                                    <ul>
                                        <input type="radio" id="checkBrTime1" name="breakTime" class="" value="30"><h4 style="display:inline"> 30 Minute</h4><br>
                                        <input type="radio" id="checkBrTime2" name="breakTime" class="" value="60"><h4 style="display:inline"> 1 Hour</h4><br>
                                        <input type="radio" id="checkSBrTime3" name="breakTime" class="" value="90"><h4 style="display:inline"> 1:30  Hour</h4><br>
                                        <input type="radio" id="checkBrTime4" name="breakTime" class="" value="120"><h4 style="display:inline"> 2 Hour</h4><br>
                                    </ul>
                                </ul>
                            </div>
                            <img id="spinner" src="../Data/giphy.gif" width="150px" height="150px" style="text-alighment:center; visibility:">
                            <div class="clearfix">
                                <button type="submit" class="continuebtn1" onclick="insertConstraint()">Route Routine</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<?php 
    }
else
    header('Location:signin.php');
?>
</html>

