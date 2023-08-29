<?php
include("config.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Mangement (HOME)</title>
    <link rel="icon" type="image/x-icon" href="image/icon.jpg">
    <link rel="stylesheet" href="css/index.css?v=<?=$version?>">
    
</head>

<body>

    <div class="full">
        <div  style="background-image:url('image/bms.jpg'); width:100%;height:700px; background-size:100%; background-repeat:no-repeat;">
        
        <div class="header">
        
            <div class="logo">
                <h1>Hotel Mangement</h1>
            </div>
            <div class="nav">
                <ul>
                <li class="item"><a href="index.php">Home</a></li>
                        <li class="item"><a href="bms.php">Book my stay</a></li>
                        <li class="item"><a href="r1.php">Hotel Room</a></li>
                        <li class="item"><a href="feedback.php">Feedback</a></li>
                        <li class="item"><a href="contect.php">Help</a></li>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br><br>
        <div class="banner">
        <form action="r1.php" method="get">
        <center>
    <div style="background:rgba(0,0,0,.6); width:80%; height:auto; padding:2%;">
        
            <table align="center" width="110%" height="50%" style="border-spacing: 0 20px;">
        
        <tr style="font-size:25px; color:#B8E8FC;">
            <th>Your Location</th>
            <th>Check In Date</th>
            <th>Check out Date</th>
            <th>Room</th>
            <td rowspan="2"><input style="color:red; height:40px; width:80px; font-size:20px; border-radius:5px; opacity:0.8;" type="submit" value="check" name="submit" ></td>
        </tr>
        <tr>
            <td>
                <center><input style=" height:20px; width:160px; font-size:15px" type="text" name="d1" placeholder="Enter Destinations"></center>
            </td>
            <td>
                <center><input style=" height:20px; width:160px; font-size:15px" type="date" name="ci"></center>
            </td>
            <td>
                <center><input style=" height:20px; width:160px; font-size:15px" type="date" name="co"></center>
            </td>
            <td>
                <center><select style=" height:20px; width:50px; font-size:15px" name="room">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select></center>
            </td>
        </tr>
        </table>
    </div>
    </div>
    </center>
</form>
    </div>
    
</div>
</body>

</html>