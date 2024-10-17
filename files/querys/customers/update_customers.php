<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Asegúrate de que el ID del cliente está presente en el formulario
    if (isset($_POST['client-id'])) {
        $clientId = intval($_POST['client-id']);
        
        // Asegúrate de que los otros campos están presentes
        if (isset($_POST['first-name']) && isset($_POST['last-name']) && isset($_POST['identification']) && 
            isset($_POST['email']) && isset($_POST['phone'])) {
                
            $firstName = mysqli_real_escape_string($conn, $_POST['first-name']);
            $lastName = mysqli_real_escape_string($conn, $_POST['last-name']);
            $identification = mysqli_real_escape_string($conn, $_POST['identification']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $phone = mysqli_real_escape_string($conn, $_POST['phone']);

            // Asegúrate de que la tabla de clientes está correctamente referenciada
            $sqlUpdate = "UPDATE 071_customers SET 
                            client_first_name = '$firstName', 
                            client_last_name = '$lastName', 
                            client_identification = '$identification', 
                            client_email = '$email', 
                            client_phone_number = '$phone' 
                          WHERE client_id = $clientId";

            // Ejecuta la consulta
            if (mysqli_query($conn, $sqlUpdate)) {
                echo "Customer updated successfully!";
            } else {
                echo "Error updating customer: " . mysqli_error($conn);
            }
        } else {
            echo "Please fill in all fields.";
        }
    } else {
        echo "Client ID is missing.";
    }

    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
