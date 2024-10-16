<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $roomNumber = intval($_POST['room-number']);
    $roomTypeId = intval($_POST['room-type']);  

    $sqlCheck = "SELECT * FROM 071_rooms WHERE room_number = '$roomNumber'";
    $resultCheck = mysqli_query($conn, $sqlCheck);

    if (mysqli_num_rows($resultCheck) > 0) {
        $sqlUpdate = "
            UPDATE 071_rooms 
            SET room_type_id = '$roomTypeId' 
            WHERE room_number = '$roomNumber'";

        if (mysqli_query($conn, $sqlUpdate)) {
            echo "Room updated successfully!";
        } else {
            echo "Error updating room: " . mysqli_error($conn);
        }
    } else {
        echo "Room not found!";
    }

    mysqli_free_result($resultCheck);
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
?>
