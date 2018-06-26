<?php
require_once('dbconfig.php');
session_start();
$confirm_code=md5(uniqid(rand()));
$_SESSION['cid'] = $confirm_code;
$id=$_REQUEST['id'];
$dept=$_REQUEST['dept'];
$email=$_REQUEST['email'];
$pass=$_REQUEST['pass'];
$_SESSION['email'] = $email;
//echo $id." " .$dept." " .$email." " .$pass;

$sql = "INSERT INTO confirmAccount (confId, studentid, dept, email, password) VALUES ('$confirm_code','$_REQUEST[id]', '$_REQUEST[dept]', '$_REQUEST[email]', '$_REQUEST[pass]')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
    header("Location:sentMail.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    header("Location:signup.php");
}

mysqli_close($conn);

?>