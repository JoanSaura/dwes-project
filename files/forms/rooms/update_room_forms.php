<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
include($root . '/student71/dwes/files/common-files/db_connection.php');

$sqlRooms = "SELECT r.room_number, r.room_type_id, rt.room_type_name, rt.room_type_price_per_day, rt.room_type_description 
             FROM 071_rooms r 
             JOIN 071_room_type rt ON r.room_type_id = rt.room_type_id;"; // Asegúrate de que '071_room_type' es correcto
$resultRooms = mysqli_query($conn, $sqlRooms);

if (!$resultRooms) {
    echo "Error en la consulta de habitaciones: " . mysqli_error($conn);
    exit();
}

$sqlRoomTypes = "SELECT room_type_id, room_type_name, room_type_price_per_day, room_type_description FROM 071_room_type;"; // Asegúrate de que '071_room_type' es correcto
$resultRoomTypes = mysqli_query($conn, $sqlRoomTypes);

if (!$resultRoomTypes) {
    echo "Error en la consulta de tipos de habitación: " . mysqli_error($conn);
    exit();
}
?>

<?php include($root . '/student71/dwes/files/common-files/header.php'); ?>

<section id="container-form">
    <form class="login-form" id="update-room-form" action="/student71/dwes/files/querys/rooms/update_rooms.php" method="POST">
        <h3>Update Room</h3>

        <label for="room-select">Select Room to Update</label>
        <select name="room-number" id="room-select" required onchange="populateRoomDetails(this.value)">
            <option value="">Choose a room</option>
            <?php while ($room = mysqli_fetch_assoc($resultRooms)) { ?>
                <option value="<?php echo intval($room['room_number']); ?>" 
                        data-type-id="<?php echo intval($room['room_type_id']); ?>" 
                        data-type-name="<?php echo htmlspecialchars($room['room_type_name']); ?>" 
                        data-price="<?php echo htmlspecialchars($room['room_type_price_per_day']); ?>"
                        data-description="<?php echo htmlspecialchars($room['room_type_description']); ?>">
                    Room <?php echo htmlspecialchars($room['room_number']); ?> - <?php echo htmlspecialchars($room['room_type_name']); ?>
                </option>
            <?php } ?>
        </select>

        <label for="room-number-input">Roaom Number</label>
        <input type="text" name="room-number-input" id="room-number-input" required>

        <label for="room-type">Room Type</label>
        <select name="room-type" id="room-type" required>
            <?php while ($roomType = mysqli_fetch_assoc($resultRoomTypes)) { ?>
                <option value="<?php echo intval($roomType['room_type_id']); ?>">
                    <?php echo htmlspecialchars($roomType['room_type_name']); ?> - $<?php echo htmlspecialchars($roomType['room_type_price_per_day']); ?> per day
                </option>
            <?php } ?>
        </select>


        <div class="submit-button">
            <input class="submit" type="submit" name="submit" value="Update Room">
        </div>
    </form>
</section>

<script>
    function populateRoomDetails(roomNumber) {
        const selectedOption = document.querySelector(`#room-select option[value="${roomNumber}"]`);
        if (selectedOption) {
            document.getElementById('room-number-input').value = roomNumber;
            document.getElementById('room-type').value = selectedOption.getAttribute('data-type-id');
            document.getElementById('room-description').value = selectedOption.getAttribute('data-description');
        }
    }
</script>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
