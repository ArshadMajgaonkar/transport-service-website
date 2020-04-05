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