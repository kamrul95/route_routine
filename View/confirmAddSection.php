<?php
require_once('jsondb.php');


	$sql = "INSERT INTO offeredcourses (code, status, capacity, count, title, type, day1, time1, time2, day2, time3, time4 ) VALUES ('$_REQUEST[code]', '$_REQUEST[status]', '$_REQUEST[capacity]', '$_REQUEST[count]', '$_REQUEST[title]', '$_REQUEST[type]', '$_REQUEST[day1]', '$_REQUEST[time1]', '$_REQUEST[time2]', '$_REQUEST[day2]', '$_REQUEST[time3]', '$_REQUEST[time4]')";



		$data=getJSONFromDB($sql);
		header("Location:offeredCourses.php");


?>