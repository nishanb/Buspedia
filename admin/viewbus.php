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
<?php
require("config.php");
//require("session.php");

session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}

?>
<body class="grey ">
<nav>
    <div class="nav-wrapper  blue-grey">
        <a href="#" class="brand-logo  " style="margin-left: 50px;"> ADMIN PANEL</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

            <li><a href="index.php" class="blue btn">ADD BUS</a></li>
            <li><a href="addtype.php" class="blue btn d">Add TYpe</a></li>
            <li><a href="addroute.php" class="blue btn">Add route</a></li>
            <li><a href="addbusroute.php" class="blue btn">Add Bus route</a></li>
            <li><a href="logout.php" class="blue btn">Logout</a></li>
        </ul>
    </div>
</nav>
<style>
    .row {
        margin-bottom: 0px;
    }

    .xx {
        overflow-y: scroll;
        height: 450px;
        display: block;
    }
</style>

<div class="container" style="margin-top: 0px;">
    <br>
    <div class="black-text white  darken-1 xx  z-depth-1" style="border-radius: 5px;">
        <table class="centered  responsive-table  ">
            <div class="center-align blue flow-text white-text">BUS DEATILS</div>
            <thead class="">
            <tr>
                <th>BUS ID</th>
                <th>BUS NAME</th>
                <th>REG-NO</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $sql = "SELECT `id`, `name`, `reg_no` FROM `bus` ";
            global $conn;
            $retval = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
               $id=$row['id'];
               $name=$row['name'];
               $reg=$row['reg_no'];

                echo "<tr><td>$id</td>
                <td>$name</td>
                <td>$reg</td>
                <td><a href='editbus.php?id=$id' class='blue btn'>EDIT</a></td>
                <td><a href='deletebus.php?id=$id' class='blue btn'>DELETE</a></td>
                </tr>";

            }

            ?>
            </tbody>
        </table>
        <br>

    </div>

</div>


</body>
</html>
