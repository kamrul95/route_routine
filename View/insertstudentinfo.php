<?php
require_once('dbconfig.php');
require_once('jsondb.php');
$passkey = $_GET['passkey'];
/*$id=$_REQUEST['id'];
$dept=$_REQUEST['dept'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];*/
//echo $id." " .$dept." " .$email." " .$pass;

$data = json_decode(getJSONFromDB("Select * from confirmAccount where confId = '$passkey'"));

$id=$data[0]->studentid;
$dept=$data[0]->dept;
$email=$data[0]->email;
$pass=$data[0]->password;

$sql = "INSERT INTO student (studentid, dept, email, password) VALUES ('$id', '$dept', '$email', '$pass')";
$ins = "INSERT INTO courseinfo (studentid, credit) VALUES ('$id', '0')";
$delete = "DELETE FROM confirmaccount WHERE confid='$passkey'";
mysqli_query($conn, $delete);
mysqli_query($conn, $ins);
if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location:signin.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
   // header("Location:signup.php");
}

mysqli_close($conn);

?>