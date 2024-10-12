<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $firstName = mysqli_real_escape_string($conn, $_POST['c-first-name']);
    $lastName = mysqli_real_escape_string($conn, $_POST['c-last-name']);
    $identification = mysqli_real_escape_string($conn, $_POST['c-identification']);
    $email = mysqli_real_escape_string($conn, $_POST['c-email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['c-phonenumber']);
    $password = mysqli_real_escape_string($conn, $_POST['c-password']); 

    $sql = "INSERT INTO 071_customers (client_first_name, client_last_name, client_identification, client_email, client_phone_number, client_password) 
            VALUES ('$firstName', '$lastName', '$identification', '$email', '$phoneNumber', '$password')";

    if (mysqli_query($conn, $sql)) {
        echo "User created successfully!";
        
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn); 
} else {
    echo "Invalid request method.";
}
?>
