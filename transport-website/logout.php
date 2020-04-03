<?php
session_start();
session_unset($_SESSION['username']);
// $_SESSION['msg']="";
// session_unset($_SESSION['msg']);
session_destroy();
header('location:index.php');
?>