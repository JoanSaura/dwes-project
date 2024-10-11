<?php 
// db_connection.php

$root = $_SERVER['DOCUMENT_ROOT'];

$conn = mysqli_connect('localhost', 'root', '', 'hotel_managment');

if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}

//include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

?>

