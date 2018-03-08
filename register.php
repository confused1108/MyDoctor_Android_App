<?php
include "db.php";
if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $q=mysqli_query($con,"INSERT INTO `users` (`name`,`username`,`password` , `email` , `number`) VALUES ('$name','$username','$password','$email', '$number')");
    if($q)
        echo "success";
    else
        echo "error";
}
?>