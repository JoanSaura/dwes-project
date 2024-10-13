<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
include($root . '/student71/dwes/files/common-files/header.php'); 
include($root . '/student71/dwes/files/querys/customers/select_customers.php'); 
include($root . '/student71/dwes/files/querys/rooms/select_rooms.php'); 
?>

<section id="container-form">
    <form class="reservation-form" action="/student71/dwes/files/querys/reservations/insert_reservations.php" method="POST">
        <h3>Make a Reservation</h3>

        <label for="client-id">Client Fullname</label>
        <select name="client-id" id="client-id" required>
            <option value="">Select a Client</option>
            <?php foreach ($customers as $customer) { ?>
                <option value="<?php echo htmlspecialchars($customer['client_id']); ?>">
                    <?php echo htmlspecialchars($customer['client_first_name'] . ' ' . $customer['client_last_name']); ?>
                </option>
            <?php } ?>
        </select>

        <label for="room-id">Available Room</label>
        <select name="room-id" id="room-id" required>
            <option value="">Select a Room</option>
            <?php foreach ($rooms as $room) { ?>
                <option value="<?php echo htmlspecialchars($room['room_number']); ?>" data-price="<?php echo htmlspecialchars($room['room_price_per_day']); ?>">
                    <?php echo htmlspecialchars($room['room_number']); ?> (<?php echo htmlspecialchars($room['room_type_name']); ?> - $<?php echo htmlspecialchars($room['room_price_per_day']); ?>)
                </option>
            <?php } ?>
        </select>

        <label for="date-in">Date In</label>
        <input type="date" name="date-in" id="date-in" required>

        <label for="date-out">Date Out</label>
        <input type="date" name="date-out" id="date-out" required>

        <p>Total Price: <span id="total-price">0€</span></p>

        <div class="submit-button">
            <input class="submit" type="submit" name="submit" value="Reserve">
        </div>
    </form>
</section>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>

<script>
    function totalDaysBetweenDates(startDate, endDate) {
        const start = new Date(startDate);
        const end = new Date(endDate);
        const timeDiff = end - start; 
        const daysDiff = Math.ceil(timeDiff / (1000 * 3600 * 24)); 
        return daysDiff > 0 ? daysDiff : 0; 
    }

    function updateTotalPrice() {
        const dateIn = document.getElementById('date-in').value;
        const dateOut = document.getElementById('date-out').value;
        const roomSelect = document.getElementById('room-id');
        const selectedRoom = roomSelect.options[roomSelect.selectedIndex];
        const roomPricePerDay = parseFloat(selectedRoom.getAttribute('data-price'));

        if (dateIn && dateOut && roomPricePerDay) {
            const totalDays = totalDaysBetweenDates(dateIn, dateOut);
            const totalPrice = totalDays * roomPricePerDay;

            document.getElementById('total-price').innerText = '$' + totalPrice.toFixed(2);
        } else {
            document.getElementById('total-price').innerText = '$0';
        }
    }

    document.getElementById('date-in').addEventListener('change', updateTotalPrice);
    document.getElementById('date-out').addEventListener('change', updateTotalPrice);
    document.getElementById('room-id').addEventListener('change', updateTotalPrice);
</script>
