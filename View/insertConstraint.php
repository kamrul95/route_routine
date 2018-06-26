<?php
require_once('dbconfig.php');
require_once('jsondb.php');
session_start();
$id=$_SESSION['id'];
//echo $id;
$code=$_GET['code'] . "<br>";
echo $code;
$ar=explode(",",$code);
$sqlGetCredit=0;
$courses = $ar[0];
for($j=1;$j<sizeof($ar)-3;$j++){
	$courses = $courses . "," . $ar[$j];
}
echo $courses;
$startTime = $ar[sizeof($ar)-3];
$breakTime = $ar[sizeof($ar)-2];
echo $startTime . " " . $breakTime;

$sql = "INSERT INTO Suggestion (StudentId, selectedcourses, starttime, breaktime) VALUES ('$id', '$courses', '$startTime', '$breakTime');";


if (mysqli_query($conn, $sql)) {
    echo "Completed Courses inserted successfully";
    
} else {
    //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("Location:routineroutine.php");
}

mysqli_close($conn);

?>