<?php
	require_once("jsondb.php");
    session_start();
?>
<?php
    if ($_SESSION["id"]==null && $_SESSION["psw"]==null){
        header("Location:signin.php");
    }
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Admin</title>
    <style>
        td, thead {
            padding: 15px;
            text-align: center;
            font-size: 18px;
            margin:15px;
            
        }
        .checkboxFour {
            width: 30px;
            height: 30px;
            background: #ddd;
            margin: 0px 0px;

            border-radius: 100%;
            position: relative;
            box-shadow: 0px 1px 3px rgba(0,0,0,0.5);
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
         .continuebtn{
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>

<body style="background-color:azure"> 
    <nav class="navbar navbar-default navbar-fixed-top topbar" role="navigation" style="background-color:aquamarine;float:left">
        <div class="topbar-container">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                <ul class="nav navbar-nav navbar-right" style="margin:5px;font-family: sans-serif;font-size:18px">
                    <li><a href="admin.php" >Home</a></li>
                    <li>
                        <a href="addCourses.php" >Add Course</a>
                    </li>
                    <li>
                        <a href="addSection.php" >Add Section</a>
                    </li>
                    <li>
                        <a href="offeredcourses.php" >Offered Courses</a>
                    </li>
                    
                    <li><a href="signout.php">Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    
    

    
</body>

</html>
<?php 
    
	echo "<br>";
	echo "<br>";
	echo "<br>";
	
	
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
	<table>
		<tr>
		<th>Code</th>
		<th>Coursename</th>
		<th>Prerequisite</th>
		<th>Credit</th>
		<th>Update</th>
		<th>Delete</th>
		</tr>

<?php


$conn = mysqli_connect("localhost", "root", "","routeroutine");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$ar=array();
//$sql = "SELECT * FROM student where name='".$_REQUEST['name']."'";
$sql = "SELECT * FROM courselist";
//echo $sql."<br/>";
$jsonData=getJSONFromDB($sql);
$jsn=json_decode($jsonData);
//$result = mysqli_query($conn, $sql)or die(mysqli_error());
for ($i=0;$i<sizeof($jsn);$i++){
		
?>	

		<tr>
			<td id="co"><?php   
			echo $jsn[$i]->code;
			$testingVariable=$jsn[$i]->code;
			?>
			</td>
			<td><?php   
			echo $jsn[$i]->coursename;
			?>
			</td>
			
			<td><?php   
			echo $jsn[$i]->prerequisite;
			?>
			</td>
			<td><?php   
			echo $jsn[$i]->credit;
			?>
			</td>
			<!--
			<td>
				<form method="post">
					
					<input type="submit"  onclick="storeCode()" value="Edit">
				</form>
			</td>-->
			<td>
				<input type="button" onclick="updateData(this.id)" id="<?php echo $jsn[$i]->code ;?>" name="<?php echo $jsn[$i]->code; ?>  " value="Edit" >
			</td>

			<td>
				<input type="button" onclick="deleteData(this.id)" id="<?php echo $jsn[$i]->code ;?>" name="<?php echo $jsn[$i]->code; ?>  " value="Delete" >
			</td>
			
	
		</tr>	
		<?php

}
		?>
	</table>
		<script type="text/javascript">
		function deleteData(code) {
            str=code;
            //alert(str);
            //window.location = 'delete.php?code=' + code;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    resp=xmlhttp.responseText;
                    alert(resp);
                    window.location = 'admin.php';

                }
            };
            
            var url='delete.php?code=' + code;
            //alert(url);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
        }
		
        function updateData(code) {
            str=code;
            //alert(str);
            window.location = 'update.php?code=' + code;
            
        }
		 
		</script>
</body>
</html>

<?php 

 ?>