<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$rooms = include($root . '/student71/dwes/files/querys/rooms/select_rooms.php');
?>
<?php include($root . '/student71/dwes/files/common-files/header.php') ?>

<div id="middle-title">
    <h1>Available Rooms</h1>
</div>

<div id="info-display">
    <div id="room-list">
        <?php if (!empty($rooms)) { ?>
            <?php foreach ($rooms as $room) { ?>
                <div class="room-card">
                    <div class="name-display">
                        <h4><?php echo htmlspecialchars($room['room_number']); ?></h4>  
                    </div>
                    <p><strong>Room Type:</strong> <?php echo htmlspecialchars($room['room_type_name']); ?></p>  
                    <p><strong>Price per Day:</strong> <?php echo htmlspecialchars($room['room_price_per_day']); ?></p>
                </div>
            <?php } ?>
        <?php } else { ?>
            <p>No rooms found in the database.</p>
        <?php } ?>
    </div>
</div>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
