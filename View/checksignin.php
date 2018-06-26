<?php
    require_once('jsondb.php');
    $id=$_REQUEST['id'];
    $psw=$_REQUEST['psw'];
    session_start();
    echo $id ." " .$psw;
    if ($_REQUEST["id"]=="321456" && $_REQUEST["psw"]=="123456"){
        $_SESSION["id"]=10;
        $_SESSION["psw"]=11;
        header("Location:admin.php");
    }
    else {

    $sql = "SELECT studentid,password FROM student WHERE studentid='$_REQUEST[id]'";

    $row = json_decode(getJSONFromDB("SELECT studentid,password FROM student WHERE studentid='$_REQUEST[id]'"));

    if($row[0]->studentid==$_REQUEST["id"] && $row[0]->password==$_REQUEST["psw"]){
        $_SESSION['id'] = $id;
        //$ar[$row["name"]]=$row["name"];
        //echo $row["name"]."<br>";
        header("Location:makeroutine.php");
    }
    else{
        header("Location:signin.php");
    }
}

?>