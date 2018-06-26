<?php 
	session_start();
	require_once ("jsondb.php");
	$code=$_REQUEST['code'];
	$sql="UPDATE offeredcourses SET code='$_REQUEST[code]',status='$_REQUEST[status]' ,capacity='$_REQUEST[capacity]',count='$_REQUEST[count]',title='$_REQUEST[title]',type='$_REQUEST[type]',day1='$_REQUEST[day1]',time1='$_REQUEST[time1]',time2='$_REQUEST[time2]',day2='$_REQUEST[day2]',time3='$_REQUEST[time3]',time4='$_REQUEST[time4]' WHERE code='$_SESSION[code]'";
	$data=getJSONFromDB($sql);
	header("Location:offeredcourses.php");

 ?>