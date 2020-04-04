<?php

require "../inc/dbinfo.php";

session_start();

$trucknumber=$_POST['trucknumber'];
$currentdate=date("Y-m-d");
$status=0;

$sql="SELECT `Truck Number`,`End Date` FROM `records` WHERE `Truck Number`='$trucknumber' ";

$result=mysqli_query($connection,$sql);

while($row=mysqli_fetch_assoc($result))
{
    if($row['End Date']<=$currentdate)
    {
        $status=1;
    }
    else
    {
        $status=0;
    }

}


if($status)
{
    echo "Available truck ".$trucknumber;
}
else
{
    echo "Not Available . Already loaded with goods";
}

echo "<br><br><button id='dashboard-btn'><a href='dashboard.php'>Go to dashboard</a></button>"
?>