<?php
$customers = include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/querys/customers/select_customers.php');
?>
<?php include($root . '/student71/dwes/files/common-files/header.php') ?>

<div id="middle-title">
    <h1>List of Customers</h1>
</div>

<div id="info-display">
    <div id="customers-list">
        <?php if (!empty($customers)) { ?>
            <?php foreach ($customers as $customer) { ?>
                <div class="customer-card">
                    <div class="name-display">
                        <h4><?php echo htmlspecialchars($customer['client_first_name']) . ' ' . htmlspecialchars($customer['client_last_name']); ?>
                    </div>
                    </h4>
                    <p><strong>Identification:</strong> <?php echo htmlspecialchars($customer['client_identification']); ?></p>
                    <p><strong>Email:</strong> <?php echo htmlspecialchars($customer['client_email']); ?></p>
                    <p><strong>Phone Number:</strong> <?php echo htmlspecialchars($customer['client_phone_number']); ?></p>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No customers found in the database.</p>
        <?php } ?>
    </div>
</div>
<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>