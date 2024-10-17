<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$customers = include($root . '/student71/dwes/files/querys/customers/select_customers.php');
?>

<?php include($root . '/student71/dwes/files/common-files/header.php'); ?>

<div id="middle-title">
    <h1>Edit Customers</h1>
</div>

<div id="info-display">
    <?php if (!empty($customers)) { ?>
        <section id="container-form">
            <form class="login-form" id="customer-form" action="/student71/dwes/files/querys/customers/update_customers.php" method="POST">
                <h3>Edit Customer</h3>

                <label for="select-customer">Select Customer to Edit</label>
                <select name="client_id" id="select-customer" class="form-select" onchange="populateForm(this.value)" required>
                    <option value="" disabled selected>Select a customer</option>
                    <?php foreach ($customers as $customer) { ?>
                        <option value="<?php echo htmlspecialchars($customer['client_id']); ?>">
                            <?php echo htmlspecialchars($customer['client_first_name'] . ' ' . $customer['client_last_name']); ?> - <?php echo htmlspecialchars($customer['client_id']); ?>
                        </option>
                    <?php } ?>
                </select>

                <label for="first-name">First Name</label>
                <input type="text" name="c-first-name" id="first-name" class="form-input" required>

                <label for="last-name">Last Name</label>
                <input type="text" name="c-last-name" id="last-name" class="form-input" required>

                <label for="identification">Identification</label>
                <input type="text" name="c-identification" id="identification" class="form-input" required>

                <label for="email">Email</label>
                <input type="email" name="c-email" id="email" class="form-input" required>

                <label for="phonenumber">Phone Number</label>
                <input type="text" name="c-phonenumber" id="phonenumber" class="form-input" required>

                <label for="password">Password</label>
                <input type="password" name="c-password" id="password" class="form-input" placeholder="Enter new password if you want to change it">

                <div class="submit-button">
                    <input class="submit form-submit" type="submit" name="submit" value="Update Customer">
                </div>
            </form>
        </section>

        <script>
            // Datos de los clientes en formato JSON para usarlos en JavaScript
            const customersData = <?php echo json_encode($customers); ?>;

            function populateForm(clientId) {
                // Buscar el cliente seleccionado por client_id
                const selectedCustomer = customersData.find(customer => customer.client_id == clientId);
                
                // Comprobar si el cliente seleccionado existe
                if (selectedCustomer) {
                    // Rellenar los campos del formulario con la información del cliente
                    document.getElementById('first-name').value = selectedCustomer.client_first_name || '';
                    document.getElementById('last-name').value = selectedCustomer.client_last_name || '';
                    document.getElementById('identification').value = selectedCustomer.client_identification || '';
                    document.getElementById('email').value = selectedCustomer.client_email || '';
                    document.getElementById('phonenumber').value = selectedCustomer.client_phone_number || '';
                } else {
                    // Limpiar los campos si no se encuentra el cliente
                    console.error("Customer not found for ID:", clientId);
                    document.getElementById('first-name').value = '';
                    document.getElementById('last-name').value = '';
                    document.getElementById('identification').value = '';
                    document.getElementById('email').value = '';
                    document.getElementById('phonenumber').value = '';
                }
            }
        </script>

    <?php } else { ?>
        <p>No customers found in the database.</p>
    <?php } ?>
</div>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
