<?php
require_once('dbconfig.php');
require_once('jsondb.php');
session_start();
$id=$_SESSION['id'];
//echo $id;
$code=$_GET['code'];
//echo $code;
$ar=explode(",",$code);
$sqlGetCredit=0;
//echo $ar[0];
for($j=0;$j<sizeof($ar);$j++){
	$data = json_decode(getJSONFromDB("SELECT credit from courselist WHERE code='$ar[$j]'"));
		//echo "Credit : " . $data[0]->credit;
        if($data!=null)
            $sqlGetCredit+=$data[0]->credit;
}


//$sqlGetCredit="SELECT credit from courselist WHERE code=$code";

$sql = "UPDATE courseinfo SET credit='$sqlGetCredit', completedcourses='$code' where studentid='$id'";


if (mysqli_query($conn, $sql)) {
    echo "Completed Courses inserted successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //header("Location:makeroutine.php");
}

mysqli_close($conn);

?>