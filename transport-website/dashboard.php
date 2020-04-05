<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Dashboard</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="dashboard.css" type="text/css">
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162285730-2"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-162285730-2');
        </script>

    </head>
    <body>
    <div id="logout-btn-container">
        <button id="logout-btn"><a href="logout.php">Logout</a></button>
    </div>  
        <?php 
        session_start();
    
        if(empty($_SESSION['username']))
        {
            // $_SESSION['msg']="you must login first";
            header('location:index.php');
        }

        if(isset($_SESSION['username'])):
        ?>
        <h2>Welcome <?php echo $_SESSION['username']."<br>" ?>  </h2>
        <?php endif ?>



        <div id="container">
            <a href="addTruck.html" class="links">ADD TRUCK</a> 
            <a href="showTruck.php" class="links">SHOW ALL TRUCKS</a>
            <a href="addNewRecord.html" class="links">ADD NEW RECORD</a> 
            <a href="history.php" class="links">PAYMENTS HISTORY</a>
            <a href="truckAvailability.html" class="links">CHECK TRUCK AVAILABILITY</a>
            <a href="deleteRecord.html" class="links">CLEAR PAYMENT HISTORY</a>
        </div>


        <script src="" async defer>  </script>
        

    </body>
</html>

?>