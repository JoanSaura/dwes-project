<?php
// insert_reservation.php

include($_SERVER['DOCUMENT_ROOT'] . '/student71/dwes/files/common-files/db_connection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $clientId = mysqli_real_escape_string($conn, $_POST['client-id']);
    $roomId = mysqli_real_escape_string($conn, $_POST['room-id']);
    $dateIn = mysqli_real_escape_string($conn, $_POST['date-in']);
    $dateOut = mysqli_real_escape_string($conn, $_POST['date-out']);

    // Calcula los días utilizando la función de la base de datos
    $sqlDays = "SELECT total_days_between_dates('$dateIn', '$dateOut') AS total_days";
    $resultDays = mysqli_query($conn, $sqlDays);
    $daysRow = mysqli_fetch_assoc($resultDays);
    $totalDays = $daysRow['total_days'];

    // Ahora puedes realizar la inserción
    $totalPrice = 0; // Ajusta este cálculo como necesites
    if ($totalDays > 0) {
        $roomPriceQuery = "SELECT rt.room_price_per_day FROM 071_room_type rt 
                           JOIN 071_rooms r ON rt.room_type_id = r.room_type_id 
                           WHERE r.room_number = '$roomId'";
        $roomPriceResult = mysqli_query($conn, $roomPriceQuery);
        $roomPriceRow = mysqli_fetch_assoc($roomPriceResult);
        $roomPricePerDay = $roomPriceRow['room_price_per_day'];

        $totalPrice = $totalDays * $roomPricePerDay;
    }

    $sqlInsert = "INSERT INTO reservations (client_id, room_id, date_in, date_out, total_price) 
                   VALUES ('$clientId', '$roomId', '$dateIn', '$dateOut', '$totalPrice')";

    if (mysqli_query($conn, $sqlInsert)) {
        echo "Reservation created successfully!";
    } else {
        echo "Error creating reservation: " . mysqli_error($conn);
    }

    mysqli_free_result($resultDays);
    mysqli_close($conn);
} else {
    echo "Invalid request method.";
}
