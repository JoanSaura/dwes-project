<?php 
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $roomNumber = mysqli_real_escape_string($conn, $_POST['room-number']);
    $roomTypeId = mysqli_real_escape_string($conn, $_POST['room-type']);
    $roomStatus = "Free"; 

    $sqlInsert = "
        INSERT INTO 071_rooms (room_number, room_type_id, room_status) 
        VALUES ('$roomNumber', '$roomTypeId', '$roomStatus')
    ";

    if (mysqli_query($conn, $sqlInsert)) {
        echo "Room created successfully!";
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
