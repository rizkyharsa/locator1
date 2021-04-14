<?php  
//error_reporting(0);
include_once ("dbconnect.php");
$email = $_POST['email'];
$password = $_POST['password'];
$passwordsha = sha1($password);

$sql = "SELECT * FROM admin WHERE EMAIL = '$email' AND PASSWORD = '$passwordsha'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result ->fetch_assoc()){
        echo "success,";
        header("Location: dashboard.php");
    }
}else{
    echo "failed";
}
?>