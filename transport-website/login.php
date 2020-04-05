<?php

include "../inc/dbinfo.php";



// $connection=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die("cannot connect");

session_start();

$username=mysqli_real_escape_string($connection,$_POST['username']);
$password=mysqli_real_escape_string($connection,$_POST['password']);


$sql="select * from users where `username`='".$username."' and `password`='".$password."' limit 1 ";
$result=mysqli_query($connection,$sql);

if (mysqli_num_rows($result)==1)
{
    echo "login successfull";
    $_SESSION['username']=$username;
    header('location:dashboard.php');
}
else
{
    echo "login failed";
    exit();
}

?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162285730-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162285730-2');
</script>
