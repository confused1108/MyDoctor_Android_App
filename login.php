<?php
include "db.php";
$username = $_POST['username'];
$userpassword = $_POST['password'];
$username = mysqli_real_escape_string($username);
$userpassword = mysqli_real_escape_string($userpassword);
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$userpassword'";
$result = mysqli_query($con,$query);
$total_rows = mysql_num_rows($result);
if ($total_rows == 1) {
    $array = array(
        "data" => "1",
    );
}
else {
    $array = array(
        "data" => "0",
    );
}
echo json_encode($array);
?>