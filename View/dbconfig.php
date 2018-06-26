<?php

$conn = mysqli_connect("localhost", "root", "","routeroutine");
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>