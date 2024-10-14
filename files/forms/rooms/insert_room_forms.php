<?php 
$root = $_SERVER['DOCUMENT_ROOT']; 
include($root . '/student71/dwes/files/common-files/db_connection.php');
include($root . '/student71/dwes/files/common-files/header.php');

$sql = "SELECT room_type_id, room_type_name, room_type_price_per_day FROM 071_room_type;";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo "Error en la consulta: " . mysqli_error($conn);
    exit();
}
?>

<section id="container-form">
    <form class="login-form" action="/student71/dwes/files/querys/rooms/insert_rooms.php" method="POST"> 
        <h3>Create a new Room</h3>
        
        <label for="room-number">Room Number</label>
        <input type="text" name="room-number" id="room-number" required> 

        <label for="room-type">Room Type</label>
        <select name="room-type" id="room-type" required>
            <option value="">Select Room Type</option>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <option value="<?php echo htmlspecialchars($row['room_type_id']); ?>">
                    <?php echo htmlspecialchars($row['room_type_name']); ?> - $<?php echo htmlspecialchars($row['room_type_price_per_day']); ?> per day
                </option>
            <?php } ?>
        </select>

        <div class="submit-button">
            <input class="submit" type="submit" name="submit" value="Register">
        </div>
    </form>
</section>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
