<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $firstName = mysqli_real_escape_string($conn, $_POST['c-first-name']);
    $lastName = mysqli_real_escape_string($conn, $_POST['c-last-name']);
    $identification = mysqli_real_escape_string($conn, $_POST['c-identification']);
    $email = mysqli_real_escape_string($conn, $_POST['c-email']);
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['c-phonenumber']);
    $password = mysqli_real_escape_string($conn, $_POST['c-password']);

    
    $sql = "INSERT INTO 071_customers (client_first_name, client_last_name, client_identification, client_email, client_phone_number,client_password) 
            VALUES ('$firstName', '$lastName', '$identification', '$email', '$phoneNumber','$password')";

    if (mysqli_query($conn, $sql)) {
        echo "User created successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn); 
}
?>


<section id="container-form">
    <form class="login-form" action="create_user.php" method="POST"> 
        <h3>Register</h3>
        <label for="first-name">First Name</label>
        <input type="text" name="c-first-name" id="first-name" required> 

        <label for="last-name">Last Name</label>
        <input type="text" name="c-last-name" id="last-name" required> 

        <label for="identification">Identification</label> 
        <input type="text" name="c-identification" id="identification" required> 

        <label for="email">Mail</label>
        <input type="email" name="c-email" id="email" required> 

        <label for="phonenumber">Phone Number</label> 
        <input type="text" name="c-phonenumber" id="phonenumber" required> 

        <label for="password">Password</label> 
        <input type="password" name="c-phonenumber" id="password" required> 

        <div class="submit-button">
            <input class="submit" type="submit" name="submit">
        </div>
    </form>
</section>
