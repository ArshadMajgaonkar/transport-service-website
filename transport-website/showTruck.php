<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="showTruck.css" type="text/css">
    </head>
    <body>

        <h2>Truck Details : </h2> <br>
        <div id='container'>
            <table>
                <tr>
                    <th>Truck Number</th>
                    <th>Truck Mileage</th>
                    <th>Date of Purchase</th>
                </tr>
                <?php
                    require "../inc/dbinfo.php";

                    $sql="SELECT * FROM `trucks`";

                    $result=mysqli_query($connection,$sql);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>".$row['Truck Number']."</td><td>".$row['Truck Mileage']."</td><td>".$row['Date of purchase']."</td></tr>";
                    }
                    if(mysqli_num_rows($result)==0)
                    {
                        echo "0 results";
                    }

                ?>
            </table>
        </div>
        <br> <br>
        <button id="dashboard-btn"><a href="dashboard.php">Go to dashboard</a></button>

        <script src="" async defer></script>
    </body>
</html>