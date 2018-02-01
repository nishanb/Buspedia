<?php
/**
 * Created by PhpStorm.
 * User: nishan
 * Date: 26-11-2017
 * Time: 03:37 PM
 */

if(isset($_GET['id'])){
    $id=$_GET['id'];
    require ("config.php");
    global $conn;
    mysqli_query($conn,"DELETE FROM `bus` WHERE `id`=$id");
    header("location:viewbus.php");
}
?>