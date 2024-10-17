<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clientId = intval($_POST['client-id']);

    // Verificar si el cliente existe
    $sqlCheck = "SELECT * FROM 071_customers WHERE client_id = '$clientId'";
    $resultCheck = mysqli_query($conn, $sqlCheck);

    if (mysqli_num_rows($resultCheck) > 0) {
        // Eliminar el cliente
        $sqlDelete = "DELETE FROM 071_customers WHERE client_id = '$clientId'";

        if (mysqli_query($conn, $sqlDelete)) {
            echo "Customer deleted successfully!";
        } else {
            echo "Error deleting customer: " . mysqli_error($conn);
        }
    } else {
        echo "Customer not found!";
    }

    mysqli_free_result($resultCheck);
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
