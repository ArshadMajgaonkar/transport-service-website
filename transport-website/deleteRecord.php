<?php

    require "../inc/dbinfo.php";
    session_start();

    $msg=$_POST['msg'];
    $displaymsg="";

    $sql="DELETE FROM `records` ";


    if($msg=="DELETE")
    {
        mysqli_query($connection,$sql);
        $displaymsg="Deleted successfully";
        header('location:history.php');
    }
    else
    {
        header('location:dashboard.php');
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
