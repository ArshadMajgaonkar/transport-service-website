<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="" type="text/css">
  <style>      
table
{
    /* border: 1px solid red; */
    /* border-color: black; */
    color: rgb(178, 207, 207);
    width: 100%;

    
}
th
{
    text-align: center;
    border: 1px solid red;
    border-collapse: separate;
}
td
{
    text-align: center;
    border: 1px solid red;
    border-collapse: separate;
}
body
{
    /* background-color: blueviolet; */
    background-image: url(truck.jpg);
    background-position: 0 10%;
    font-family: sans-serif;
    font-weight: bold;
}

h2
{
    color: rgb(230, 209, 209);
    font-weight: bold;
}

#container
{
    background-color:rgba(29, 108, 134, 0.5);
    height: 100%;
    width: 85%;
}

#dashboard-btn
{
    border-radius: 5px;
}
#dashboard-btn:hover
{
    background-color: rgba(255, 255, 255, 0.555);
    cursor: pointer;
}
</style>
    </head>
    <body>
     <?php session_start(); ?>
        <h2>PAYMENT HISTORY : </h2> <br>
        <div id='container'>
            <table>
                <tr>
                    <th>Truck Number</th>
                    <th>Driver Name</th>
                    <th>Source</th>
                    <th>Destination</th>
                    <th>Start date</th>
                    <th>End date</th>
                    <th>Received Amt</th>
                    <th>Spend Amt</th>
                    <th>Profit</th>
                </tr>
                <?php
                    require "../inc/dbinfo.php";

                    $sql="SELECT * FROM `records` ORDER BY `Start Date` DESC";

                    $result=mysqli_query($connection,$sql);

                    while($row=mysqli_fetch_assoc($result))
                    {
                        echo "<tr><td>".$row['Truck Number']."</td>
                        <td>".$row['Driver Name']."</td>
                        <td>".$row['Source']."</td>
                        <td>".$row['Destination']."</td>
                        <td>".$row['Start Date']."</td>
                        <td>".$row['End Date']."</td>
                        <td>".$row['Received Amt']."</td>
                        <td>".$row['Spend Amt']."</td>
                        <td>".$row['Profit']."</td>                        
                        </tr>";
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