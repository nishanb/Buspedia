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
//require("session.php");

session_start();
if(!isset($_SESSION['admin'])){
    header("location:login.php");
}

require ("functions.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST['typename'])){
        $catname=$_POST['typename'];
        $sql="INSERT INTO `bus_type`(`name`) VALUES ('$catname')";
        execute($sql);
        unset($_POST['typename']);
    }
}
?>

<!-- User Profile -->
<nav>
    <div class="nav-wrapper  blue-grey">
        <a href="#" class="brand-logo  " style="margin-left: 50px;"> ADMIN PANEL</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php" class="blue btn">Add BUS</a></li>
            <li><a href="addtype.php" class="blue btn disabled">Add TYpe</a></li>
            <li><a href="addroute.php" class="blue btn">Add route</a></li>
            <li><a href="addbusroute.php" class="blue btn">Add Bus route</a></li>
            <li><a href="logout.php" class="blue btn">Logout</a></li>
        </ul>
    </div>
</nav>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col s12 card-panel white darken-4">
            <div class="center flow-text white-text blue">ADD TYPE</div>
            <form class="col s12 " style="margin: 100px;" method="post" action="addtype.php">
                <div class="row" style="">
                    <div class="input-field col s4" style="margin: 20px;" >
                        <input  id="first_name" name="typename" type="text" class="validate" required>
                        <label for="first_name">TYPE NAME</label>
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