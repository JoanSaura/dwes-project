<?php
// db_connection.php

$root = $_SERVER['DOCUMENT_ROOT'];

// Crear la conexión
$conn = mysqli_connect('localhost', 'root', '', 'hotel_managment');

// Verificar la conexión
if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}

// Devolver la conexión para que esté disponible al incluir este archivo
return $conn;
?>
