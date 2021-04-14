<?php
//error_reporting(0);
include_once ("dbconnect.php");
$name = $_POST['name'];
$email = $_POST['email'];
$password = sha1($_POST['password']);
$address = $_POST['address'];

$sqlinsert = "INSERT INTO admin (NAME,EMAIL,PASSWORD,ADDRESS) VALUES ('$name','$email','$password','$address')";

if ($conn->query($sqlinsert) === TRUE) {
    echo "success";
    header("Location: login.php");
} else {
    echo "failed";
}

?>