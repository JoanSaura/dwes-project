<?php
include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

$sql = "SELECT * FROM reservation_details;";

$result = mysqli_query($conn, $sql);

$reservations = array();

if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reservations[] = $row;
    }
}

mysqli_free_result($result);
mysqli_close($conn);

return $reservations;
?>
