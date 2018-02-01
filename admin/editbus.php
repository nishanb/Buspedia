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
require("functions.php");

session_start();
if (!isset($_SESSION['admin'])) {
    header("location:login.php");
}

if (!isset($_GET['id'])){
    header("location:viewbus.php");
}


global $conn;
$id = $_GET['id'];
$sql = "SELECT `id`, `name`, `reg_no`, `capacity`, `type_id` FROM `bus` WHERE `id`=$id";
$row = mysqli_fetch_array(mysqli_query($conn, $sql));
$id = $row['id'];
$name = $row['name'];
$reg = $row['reg_no'];
$cap = $row['capacity'];
$type = $row['type_id'];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $reg = $_POST['regno'];
    $cap = $_POST['capacity'];
    $type =$_POST['type'];
    echo $sql;
    $sql = "UPDATE `bus` SET `name`='$name',`reg_no`='$reg',`capacity`='$cap',`type_id`='$type' WHERE `id`=$id";
    mysqli_query($conn, $sql);

    header("location:viewbus.php");

}
?>

<!-- User Profile -->
<nav>
    <div class="nav-wrapper  blue-grey">
        <a href="#" class="brand-logo  " style="margin-left: 50px;"> ADMIN PANEL</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">

            <li><a href="viewbus.php" class="blue btn">View BUS</a></li>
            <li><a href="addtype.php" class="blue btn d">Add TYpe</a></li>
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
            <div class="center flow-text white-text blue">ADD BUS</div>
            <form class="col s12 " style="margin: 100px;" method="post" action="editbus.php">
                <div class="row" style="">
                    <?php
                    echo " <input name=\"id\" value=\"$id\" hidden>";
                    ?>
                    <div class="input-field col s4" style="margin: 20px;">
                        <?php
                        echo "<input id=\"name\" name=\"name\" type=\"text\" value='$name' class=\"validate\" required>";
                        ?>
                        <label for="first_name">BUS NAME</label>
                    </div>
                    <div class="input-field col s4" style="margin: 20px;">
                        <?php
                        echo " <input id=\"last_name\" type=\"text\" name=\"regno\" value='$reg' class=\"validate\" required>";
                        ?>
                        <label for="regno">REG NO</label>
                    </div>
                    <div class="input-field col s4" style="margin: 20px;">
                        <?php
                        echo " <input id=\"last_name\" type=\"text\" value='$cap' name=\"capacity\" class=\"validate\" required>";
                        ?>
                        <label for="capacity">CAPACITY</label>
                    </div>

                    <div class="input-field col s4" style="margin: 20px;margin-bottom:">
                        <select name="type" style="margin: 5px;margin-bottom: 0px;" required>
                            <?php
                            get_type($type);
                            ?>
                        </select>
                    </div>
                    <div class="input-field col s4" style="margin: 0px;">
                        <input type="submit" class="btn blue">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>

</html>