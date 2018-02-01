<?php
/**
 * Created by PhpStorm.
 * User: nishan
 * Date: 25-11-2017
 * Time: 04:07 PM
 */
require ("config.php");
session_start();
session_destroy();
global  $conn;
mysqli_commit($conn);
header('location:login.php');

