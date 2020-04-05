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
    echo "success";
}
else
{
    echo "failed";
}

echo "<br><a href='dashboard.php' > Go to Dashboard </a>";


?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162285730-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162285730-2');
</script>
