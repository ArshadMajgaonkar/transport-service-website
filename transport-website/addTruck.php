<?php

require "../inc/dbinfo.php";
session_start();

$trucknumber=$_POST['trucknumber'];
$truckmileage=$_POST['truckmileage'];
$truckdate=$_POST['date'];

echo $truckdate;

$sql="INSERT INTO `trucks`(`Truck Number`, `Truck Mileage`, `Date of purchase`) VALUES ('$trucknumber','$truckmileage','$truckdate')";

$result=mysqli_query($connection,$sql);

if(mysqli_affected_rows($connection))
{
    echo $trucknumber."<br>";
    echo "success";
}
else
{
    echo "failed";
}

echo "<br><a href='dashboard.php' > logout </a>";
// mysqli_close($connection);


?>