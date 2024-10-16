<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$reservations = include($root . '/student71/dwes/files/querys/reservations/select_reservations.php');
?>
<?php include($root . '/student71/dwes/files/common-files/header.php') ?>

<div id="middle-title">
    <h1>Reservation Details</h1>
</div>

<div id="info-display">
    <div id="reservations-list">
        <?php if (!empty($reservations)) { ?>
            <?php foreach ($reservations as $reservation) { ?>
                <div class="reservation-card">
                    <div>
                        <div class="name-display">
                            <h4>Room Number: <?php echo htmlspecialchars($reservation['Room_Number']); ?></h4>
                        </div>
                        <p><strong>Room Type:</strong> <?php echo htmlspecialchars($reservation['Room_Type_Name']); ?></p>
                        <p><strong>Price per Day:</strong> <?php echo htmlspecialchars($reservation['Room_Type_Price_Per_Day']); ?></p>
                    </div>

                    <div>
                        <p><strong>Client Name:</strong> <?php echo htmlspecialchars($reservation['Client_First_Name']) . '  ' . htmlspecialchars($reservation['Client_Last_Name']); ?></p>
                    </div>

                    <div>
                        <p><strong>Date In:</strong> <?php echo htmlspecialchars($reservation['Date_In']); ?></p>
                        <p><strong>Date Out:</strong> <?php echo htmlspecialchars($reservation['Date_Out']); ?></p>
                        <p><strong>Total Days:</strong> <?php echo htmlspecialchars($reservation['Total_Days']); ?></p>
                        <p><strong>Total Price:</strong> <?php echo htmlspecialchars($reservation['Total_Price']); ?></p>
                    </div>

                </div>
                <div id="edit-icons">
                    <i class="fa-solid fa-pencil"></i>
                    <i class="fa-solid fa-trash"></i>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No reservations found in the database.</p>
        <?php } ?>
    </div>
</div>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?> 
