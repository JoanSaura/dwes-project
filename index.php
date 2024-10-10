<?php 
$root = $_SERVER['DOCUMENT_ROOT'];

$conn = mysqli_connect('localhost', 'root', '', 'hotel_managment');

if (!$conn) {
    die('Connection error: ' . mysqli_connect_error());
}

$sql = 'SELECT * FROM 071_rooms WHERE room_status = "available" ';
$result = mysqli_query($conn, $sql);

$rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);

mysqli_close($conn);

?>

<?php include($root . '/student71/dwes/files/common-files/header.php'); ?>
<h4>Room's List</h4>

<div id="db-content">
    <div class="row">
        <?php foreach($rooms as $room){ ?>
            <div class="content-line">
                <h3><?php echo htmlspecialchars($room['room_number'])?></h3>
            </div>
        <?php }?>
    </div>
</div>

<?php include($root . '/student71/dwes/files/common-files/footer.php'); ?>
