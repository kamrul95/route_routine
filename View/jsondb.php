
<?php
function getJSONFromDB($sql){
	$conn = mysqli_connect("localhost", "root", "","routeroutine");
	$result = mysqli_query($conn, $sql)or die(mysqli_error());
	$arr=array();
	while($row = mysqli_fetch_assoc($result)) {
		$arr[]=$row;
	}
	return json_encode($arr);
}
/*$data = json_decode(getJSONFromDB("Select * from student"));
$found = false;
for($i=0;$i<sizeof($data);$i++){
	if($data[$i]->studentid==$_REQUEST["id"]){
		echo "already exist, chooose a new one";
		$found = true;
	}
}
if(!$found)
	echo "Ok";*/
?>

