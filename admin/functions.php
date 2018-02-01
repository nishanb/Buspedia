<?php

//function to create bustype list
function gen_type_list()
{
    $sql = "SELECT `id`, `name` FROM `bus_type`";
    global $conn;
    $retval = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        $x = $row['id'];
        $y = $row['name'];
        echo "  <option value=\"$x\"  class=\"\" >$y</option>";
    }

}


//bussx
function get_type($type)
{
    $sql = "SELECT `id`, `name` FROM `bus_type`";
    global $conn;
    $retval = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        $x = $row['id'];
        $y = $row['name'];

        if ($x == $type) {
            echo "  <option value=\"$x\"   class=\"\" selected >$y</option>";
        } else {
            echo "  <option value=\"$x\"  class=\"\" >$y</option>";
        }
    }

}

//function to execute querry
function execute($sql)
{
    global $conn;
    mysqli_query($conn, $sql);

}

//function to create route list
function gen_bus_list()
{
    $sql = "SELECT `id`, `name`, `reg_no` FROM `bus`";
    global $conn;
    $retval = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        $x = $row['id'];
        $y = $row['name'];
        $z = $row['reg_no'];
        echo "  <option value=\"$x\"  class=\"\" >$y-$z</option>";
    }

}

//function to create bustype list
function gen_route_list()
{
    $sql = "SELECT `id`, `source`, `destination` FROM `routes`";
    global $conn;
    $retval = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_array($retval, MYSQLI_ASSOC)) {
        $x = $row['id'];
        $y = $row['source'];
        $z = $row['destination'];
        echo "  <option value=\"$x\"  class=\"\" >$y-$z</option>";
    }

}

?>