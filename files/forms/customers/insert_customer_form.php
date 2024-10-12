<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
?>

<section id="container-form">
    <form class="login-form" action="/student71/dwes/files/querys/customers/insert_customers.php" method="POST"> 
        <h3>Register Customer</h3>
        
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
        <input type="password" name="c-password" id="password" required> 

        <div class="submit-button">
            <input class="submit" type="submit" name="submit" value="Register">
        </div>
    </form>
</section>


