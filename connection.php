<?php 

$db_name = "phponline";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";

// Create Connection 

$connect = new mysqli($db_host, $db_user, $db_pass, $db_name);

// check connectionn

if($connect->connect_error){
    echo "connection error";
} else {
    echo "";
}

?>