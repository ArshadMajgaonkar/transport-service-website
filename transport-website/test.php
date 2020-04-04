<?php

define('DB_HOST','localhost');
define('DB_NAME','transport');
define('DB_USERNAME','root1');   //error
define('DB_PASSWORD','root');

$trucknumber="mh 08 2345";
$truckmileage=20;
$truckdate="2030-04-23";

$connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("cannot connect");

$sql="INSERT INTO `trucks`( `Truck Number`, `Truck Mileage`, `Date of purchase`) VALUES ('$trucknumber','$truckmileage','$truckdate')";

mysqli_query($connection,$sql);

if(mysqli_affected_rows($connection))
{
    echo "inserted".$truckdate;
}
else
{
    echo "failed";
}

mysqli_close($connection);

?>