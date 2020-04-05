<?php

require "../inc/dbinfo.php";

session_start();
session_unset($_SESSION['username']);
// $_SESSION['msg']="";
// session_unset($_SESSION['msg']);
mysqli_close($connection);
session_destroy();
header('location:index.php');

?>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162285730-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162285730-2');
</script>
