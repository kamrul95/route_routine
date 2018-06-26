<?php 
	session_start();
	require_once ("jsondb.php");
	$code=$_REQUEST['code'];
	$sql="UPDATE courselist SET code='$_REQUEST[code]',coursename='$_REQUEST[name]' ,prerequisite='$_REQUEST[prerequisite]',credit='$_REQUEST[credit]' WHERE code='$_SESSION[code]'";
	$data=getJSONFromDB($sql);
	header("Location:admin.php");

 ?>