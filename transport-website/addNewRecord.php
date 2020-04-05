<?php
    require "../inc/dbinfo.php";

    session_start();
    
    $trucknumber=$_POST['trucknumber'];
    $drivername=$_POST['drivername'];
    $source=$_POST['source'];
    $destination=$_POST['destination'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $receivedamt=$_POST['received-amt'];
    $spendamt=$_POST['spend-amt'];

    $profit=$receivedamt-$spendamt;

    $sql="INSERT INTO `records`(`Truck Number`, `Driver Name`, `Source`, `Destination`, `Start Date`, `End Date`, `Received Amt`, `Spend Amt`, `Profit`) VALUES ('$trucknumber','$drivername','$source','$destination','$startdate','$enddate','$receivedamt','$spendamt','$profit')";

    mysqli_query($connection,$sql);

    if(mysqli_affected_rows($connection))
    {
        echo "new record added<br>";
    }
    else
    {
        echo "error while adding";
    }

    echo "<br><a href='dashboard.php' > Go to dasboard </a>";
?>
        