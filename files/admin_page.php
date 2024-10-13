<?php $root = $_SERVER['DOCUMENT_ROOT']; ?>
<?php include($root . '/student71/dwes/files/common-files/header.php') ?>

<div id="admin-page">
    <div id="admin-container">
        <h1 id="admin-tittle">Admin page</h1>

        <div class="admin-list">
            <h3>Rooms</h3>
            <ul>
                <li><a href="/student71/dwes/files/forms/rooms/select_room_forms.php">Search Romm</a></li>
                <li><a href="">Create a Romm</a></li>
                <li><a href="">Change Romm Data</a></li>
                <li><a href="">Delete a room</a></li>
            </ul>
        </div>
        <div class="admin-list">
            <h3>Customers</h3>
            <ul>
                <li><a href="/student71/dwes/files/forms/customers/select_customer_form.php">Search customer data</a></li> 
                <li><a href="/student71/dwes/files/register.php">Register a customer</a></li> 
                <li><a href="">Update customer data</a></li> 
                <li><a href="">Delete customer</a></li>
            </ul>
        </div>
        <div class="admin-list">
            <h3>Reservations</h3>
            <ul>
                <li><a href="/student71/dwes/files/forms/reservations/select_reservations_forms.php">Search an existing reservation</a></li>
                <li><a href="/student71/dwes/files/forms/reservations/insert_reservation_forms.php">Create a reservation</a></li> 
                <li><a href="">Update an existing reservation</a></li>
                <li><a href="">Delete a reservation</a></li>
            </ul>
        </div>
    </div>
</div>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>