<?php
include "db.php";
if(isset($_POST['insert']))
{
    $name=$_POST['name'];
    $number=$_POST['number'];
    $doctor=$_POST['doctor'];
    $day=$_POST['day'];
    if($day='today')
    {
        $date=date("Y/m/d");
    }
    else if($day='tomorrow')
    {
        $date=date("Y/m/d+1");
    }
    else
    {
        $datee = new DateTime('tomorrow');
        $date= $datee->format('Y-m-d');
    }
    $time=$_POST['time'];
    $q=mysqli_query($con,"INSERT INTO `appointments` (`patient_name`,`patient_number`,`doctor_id` , `appointment_time` , `appointment_date`) VALUES ('$name','$number','$doctor','$time', '$date')");
    if($q)
        echo "success";
    else
        echo "error";
}
?>