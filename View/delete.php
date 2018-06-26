<?php
	require("dbconfig.php");
?>
<?php 			
		$code=$_GET['code'];
		$sql="DELETE FROM courselist WHERE code='$code'";
		$result = mysqli_query($conn, $sql)or die(mysqli_error());
		if ($result)
		echo "deleted";
		else echo "Unsuccessful";
 ?>