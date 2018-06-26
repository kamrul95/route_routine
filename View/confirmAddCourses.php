<?php
require_once('jsondb.php');


	$sql = "INSERT INTO courselist (code, coursename, prerequisite, credit) VALUES ('$_REQUEST[code]', '$_REQUEST[name]', '$_REQUEST[prerequisite]', '$_REQUEST[credit]')";



		$data=getJSONFromDB($sql);
		header("Location:admin.php");


?>