<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
include($root . '/student71/dwes/files/common-files/db_connection.php');

$sqlRoomTypes = "SELECT room_type_id, room_type_name, room_type_price_per_day FROM 071_room_type;";
$resultRoomTypes = mysqli_query($conn, $sqlRoomTypes);

$sqlRooms = "SELECT r.room_number, r.room_type_id, r.room_status, rt.room_type_name 
             FROM 071_rooms r 
             JOIN 071_room_type rt ON r.room_type_id = rt.room_type_id;";
$resultRooms = mysqli_query($conn, $sqlRooms);

if (!$resultRoomTypes || !$resultRooms) {
    echo "Error en la consulta: " . mysqli_error($conn);
    exit();
}
?>

<?php include($root . '/student71/dwes/files/common-files/header.php')?>

<section id="container-form">
    <form class="login-form" id="room-form" action="/student71/dwes/files/querys/rooms/update_rooms.php" method="POST"> 
        <h3>Update a Room</h3>

        <label for="room-select">Select Room to Update</label>
        <select name="room-select" id="room-select">
            <option value="">Choose a room</option>
            <?php while ($room = mysqli_fetch_assoc($resultRooms)) { ?>
                <option value="<?php echo htmlspecialchars($room['room_number']); ?>" 
                        data-room-type="<?php echo htmlspecialchars($room['room_type_id']); ?>">
                    Room <?php echo htmlspecialchars($room['room_number']); ?> - <?php echo htmlspecialchars($room['room_type_name']); ?>
                </option>
            <?php } ?>
        </select>

        <label for="room-number">Room Number</label>
        <input type="number" name="room-number" id="room-number" required min="1"> <!-- Cambiado a number -->

        <label for="room-type">Room Type</label>
        <select name="room-type" id="room-type" required>
            <option value="">Select Room Type</option>
            <?php while ($row = mysqli_fetch_assoc($resultRoomTypes)) { ?>
                <option value="<?php echo htmlspecialchars($row['room_type_id']); ?>">
                    <?php echo htmlspecialchars($row['room_type_name']); ?> - $<?php echo htmlspecialchars($row['room_type_price_per_day']); ?> per day
                </option>
            <?php } ?>
        </select>

        <div class="submit-button">
            <input class="submit" type="submit" name="submit" value="Update Room">
        </div>
    </form>
</section>

<script>
    document.getElementById('room-select').addEventListener('change', function() {
        var selectedRoom = this.options[this.selectedIndex];
        var roomNumber = selectedRoom.value;
        var roomTypeId = selectedRoom.getAttribute('data-room-type');

        if (roomNumber) {
            document.getElementById('room-number').value = roomNumber;
            document.getElementById('room-type').value = roomTypeId;
        } else {
            document.getElementById('room-number').value = '';
            document.getElementById('room-type').value = '';
        }
    });
</script>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
