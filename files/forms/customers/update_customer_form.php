<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
include($root . '/student71/dwes/files/common-files/db_connection.php');

// Consulta para obtener los clientes
$sqlCustomers = "SELECT client_id, client_first_name, client_last_name, client_identification, client_email, client_phone_number 
                 FROM 071_customers;"; // Asegúrate de que '071_customers' es correcto
$resultCustomers = mysqli_query($conn, $sqlCustomers);

if (!$resultCustomers) {
    echo "Error en la consulta de clientes: " . mysqli_error($conn);
    exit();
}
?>

<?php include($root . '/student71/dwes/files/common-files/header.php'); ?>

<section id="container-form">
    <form class="login-form" id="update-customer-form" action="/student71/dwes/files/querys/customers/update_customers.php" method="POST">
        <h3>Update Customer</h3>

        <label for="customer-select">Select Customer to Update</label>
        <select name="client-id" id="customer-select" required onchange="populateCustomerDetails(this.value)">
            <option value="">Choose a customer</option>
            <?php while ($customer = mysqli_fetch_assoc($resultCustomers)) { ?>
                <option value="<?php echo intval($customer['client_id']); ?>" 
                        data-first-name="<?php echo htmlspecialchars($customer['client_first_name']); ?>" 
                        data-last-name="<?php echo htmlspecialchars($customer['client_last_name']); ?>" 
                        data-identification="<?php echo htmlspecialchars($customer['client_identification']); ?>" 
                        data-email="<?php echo htmlspecialchars($customer['client_email']); ?>" 
                        data-phone="<?php echo htmlspecialchars($customer['client_phone_number']); ?>">
                    <?php echo htmlspecialchars($customer['client_first_name'] . ' ' . $customer['client_last_name']); ?>
                </option>
            <?php } ?>
        </select>

        <label for="first-name-input">First Name</label>
        <input type="text" name="first-name" id="first-name-input" required>

        <label for="last-name-input">Last Name</label>
        <input type="text" name="last-name" id="last-name-input" required>

        <label for="identification-input">Identification</label>
        <input type="text" name="identification" id="identification-input" required>

        <label for="email-input">Email</label>
        <input type="email" name="email" id="email-input" required>

        <label for="phone-input">Phone Number</label>
        <input type="text" name="phone" id="phone-input" required>

        <div class="submit-button">
            <input class="submit" type="submit" name="submit" value="Update Customer">
        </div>
    </form>
</section>

<script>
    function populateCustomerDetails(customerId) {
        const selectedOption = document.querySelector(`#customer-select option[value="${customerId}"]`);
        if (selectedOption) {
            document.getElementById('first-name-input').value = selectedOption.getAttribute('data-first-name');
            document.getElementById('last-name-input').value = selectedOption.getAttribute('data-last-name');
            document.getElementById('identification-input').value = selectedOption.getAttribute('data-identification');
            document.getElementById('email-input').value = selectedOption.getAttribute('data-email');
            document.getElementById('phone-input').value = selectedOption.getAttribute('data-phone');
        }
    }
</script>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
