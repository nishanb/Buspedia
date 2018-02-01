<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css" media="screen,projection"/>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="css/main.css">

    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/postreport.js"></script>
</head>

<body class="grey ">
<?php
require("config.php");
session_start();
if(!isset($_SESSION['admin'])){
    header("location:login.php");
}

require ("functions.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
        $bus=$_POST['bus'];
        $route=$_POST['route'];
        $sql="INSERT INTO `bus_route`( `bus_id`, `route_id`) VALUES ($bus,$route)";
        execute($sql);

}

?>

<!-- User Profile -->
<nav>
    <div class="nav-wrapper  blue-grey">
        <a href="#" class="brand-logo  " style="margin-left: 50px;"> ADMIN PANEL</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php" class="blue btn">Add BUS</a></li>
            <li><a href="addtype.php" class="blue btn ">Add TYpe</a></li>
            <li><a href="addroute.php" class="blue btn">Add route</a></li>
            <li><a href="addbusroute.php" class="blue btn" disabled>Add Bus route</a></li>
            <li><a href="logout.php" class="blue btn">Logout</a></li>
        </ul>
    </div>
</nav>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col s12 card-panel white darken-4">
            <div class="center flow-text white-text blue">ADD BUS</div>
            <form class="col s12 " style="margin: 100px;" action="addbusroute.php" method="post">
                <div class="row" style="">
                    <div class="input-field col s4"  style="margin: 20px;">
                        <select style="margin: 5px;" name="bus">
                            <option   class="" value="0" selected disabled>Select Bus Name</option>
                            <?php gen_bus_list()?>
                        </select>
                    </div>

                    <div class="input-field col s4"  style="margin: 20px;">
                        <select style="margin: 5px;" name="route">
                            <option   class="" value="0">Select Route</option>
                            <?php gen_route_list()?>
                        </select>
                    </div>
                    <div class="input-field col s4" style="margin: 20px;" >
                        <input   type="submit" class="btn blue" >
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>