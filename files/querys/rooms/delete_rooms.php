<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $roomNumber = intval($_POST['room-number']);

    $sqlCheck = "SELECT * FROM 071_rooms WHERE room_number = '$roomNumber'";
    $resultCheck = mysqli_query($conn, $sqlCheck);

    if (mysqli_num_rows($resultCheck) > 0) {
        $sqlDelete = "DELETE FROM 071_rooms WHERE room_number = '$roomNumber'";

        if (mysqli_query($conn, $sqlDelete)) {
            echo "Room deleted successfully!";
        } else {
            echo "Error deleting room: " . mysqli_error($conn);
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
