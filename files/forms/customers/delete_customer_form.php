<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
include($root . '/student71/dwes/files/common-files/db_connection.php');

// Consulta para obtener los clientes actuales
$sqlCustomers = "SELECT client_id, client_first_name, client_last_name FROM 071_customers;";
$resultCustomers = mysqli_query($conn, $sqlCustomers);

if (!$resultCustomers) {
    echo "Error en la consulta: " . mysqli_error($conn);
    exit();
}
?>

<?php include($root . '/student71/dwes/files/common-files/header.php')?> 

<section id="container-form">
    <form class="login-form" id="delete-customer-form" action="/student71/dwes/files/querys/customers/delete_customers.php" method="POST"> 
        <h3>Delete a Customer</h3>

        <label for="customer-select">Select Customer to Delete</label>
        <select name="client-id" id="customer-select" required>
            <option value="">Choose a customer</option>
            <?php while ($customer = mysqli_fetch_assoc($resultCustomers)) { ?>
                <option value="<?php echo intval($customer['client_id']); ?>">
                    <?php echo htmlspecialchars($customer['client_first_name'] . ' ' . $customer['client_last_name']); ?>
                </option>
            <?php } ?>
        </select>

        <div class="submit-button">
            <input class="submit" type="submit" name="submit" value="Delete Customer">
        </div>
    </form>
</section>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
