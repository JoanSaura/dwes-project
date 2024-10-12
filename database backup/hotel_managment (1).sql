-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-10-2024 a las 00:42:48
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hotel_managment`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_customers`
--

CREATE TABLE `071_customers` (
  `client_id` int(11) NOT NULL,
  `client_first_name` varchar(50) DEFAULT NULL,
  `client_last_name` varchar(50) DEFAULT NULL,
  `client_identification` varchar(20) DEFAULT NULL,
  `client_email` varchar(100) DEFAULT NULL,
  `client_phone_number` varchar(15) DEFAULT NULL,
  `client_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_customers`
--

INSERT INTO `071_customers` (`client_id`, `client_first_name`, `client_last_name`, `client_identification`, `client_email`, `client_phone_number`, `client_password`) VALUES
(1, 'Leonardo', 'DiCaprio', 'L12345678', 'leo.dicaprio@gmail.com', '+1-555-0101', NULL),
(2, 'Natalie', 'Portman', 'N23456789', 'natalie.portman@gmail.com', '+1-555-0102', NULL),
(3, 'Brad', 'Pitt', 'B34567890', 'brad.pitt@gmail.com', '+1-555-0103', NULL),
(4, 'Angelina', 'Jolie', 'A45678901', 'angelina.jolie@gmail.com', '+1-555-0104', NULL),
(5, 'Scarlett', 'Johansson', 'S56789012', 'scarlett.johansson@gmail.com', '+1-555-0105', NULL),
(6, 'Ryan', 'Reynolds', 'R67890123', 'ryan.reynolds@gmail.com', '+1-555-0106', NULL),
(7, 'Jennifer', 'Lawrence', 'J78901234', 'jennifer.lawrence@example.com', '+1-555-0107', NULL),
(8, 'Tom', 'Hanks', 'T89012345', 'tom.hanks@gmail.com', '+1-555-0108', NULL),
(9, 'Meryl', 'Streep', 'M90123456', 'meryl.streep@gmail.com', '+1-555-0109', NULL),
(10, 'Will', 'Smith', 'W01234567', 'will.smith@gmail.com', '+1-555-0110', NULL),
(11, 'Julia', 'Roberts', 'J12345679', 'julia.roberts@example.com', '+1-555-0111', NULL),
(12, 'George', 'Clooney', 'G23456780', 'george.clooney@gmail.com', '+1-555-0112', NULL),
(13, 'Emma', 'Watson', 'E34567891', 'emma.watson@gmail.com', '+1-555-0113', NULL),
(14, 'Chris', 'Hemsworth', 'C45678902', 'chris.hemsworth@gmail.com', '+1-555-0114', NULL),
(15, 'Kate', 'Winslet', 'K56789013', 'kate.winslet@gmail.com', '+1-555-0115', NULL),
(16, 'Hugh', 'Jackman', 'H67890124', 'hugh.jackman@gmail.com', '+1-555-0116', NULL),
(17, 'Ryan', 'Gosling', 'R78901235', 'ryan.gosling@gmail.com', '+1-555-0117', NULL),
(18, 'Jessica', 'Chastain', 'J89012346', 'jessica.chastain@gmail.com', '+1-555-0118', NULL),
(19, 'Robert', 'Pattinson', 'R90123457', 'robert.pattinson@gmail.com', '+1-555-0119', NULL),
(20, 'Charlize', 'Theron', 'C01234568', 'charlize.theron@gmail.com', '+1-555-0120', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_employee`
--

CREATE TABLE `071_employee` (
  `employee_id` int(11) NOT NULL,
  `employee_first_name` varchar(50) DEFAULT NULL,
  `employee_last_name` varchar(50) DEFAULT NULL,
  `employee_identification` varchar(20) DEFAULT NULL,
  `employee_email` varchar(100) DEFAULT NULL,
  `employee_phone_number` varchar(15) DEFAULT NULL,
  `employee_position` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_employee`
--

INSERT INTO `071_employee` (`employee_id`, `employee_first_name`, `employee_last_name`, `employee_identification`, `employee_email`, `employee_phone_number`, `employee_position`) VALUES
(1, 'Penélope', 'Cruz', 'PC12345678', 'penelope.cruz@gmail.com', '+34-600-123-456', 1),
(2, 'Javier', 'Bardem', 'JB23456789', 'javier.bardem@gmail.com', '+34-600-234-567', 1),
(3, 'Antonio', 'Banderas', 'AB34567890', 'antonio.banderas@gmail.com', '+34-600-345-678', 3),
(4, 'Salma', 'Hayek', 'SH45678901', 'salma.hayek@gmail.com', '+34-600-456-789', 3),
(5, 'Luis', 'Tosar', 'LT56789012', 'luis.tosar@gmail.com', '+34-600-567-890', 3),
(6, 'Clara', 'Lago', 'CL67890123', 'clara.lago@gmail.com', '+34-600-678-901', 2),
(7, 'Mario', 'Casas', 'MC78901234', 'mario.casas@gmail.com', '+34-600-789-012', 4),
(8, 'Ana', 'de Armas', 'AA89012345', 'ana.dearmas@gmail.com', '+34-600-890-123', 4),
(9, 'Marta', 'Hazas', 'MH90123456', 'marta.hazas@gmail.com', '+34-600-901-234', 1),
(10, 'Paco', 'López', 'PL01234567', 'paco.lopez@gmail.com', '+34-600-012-345', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_employee_position`
--

CREATE TABLE `071_employee_position` (
  `position_id` int(11) NOT NULL,
  `position_name` varchar(50) DEFAULT NULL,
  `position_salary` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_employee_position`
--

INSERT INTO `071_employee_position` (`position_id`, `position_name`, `position_salary`) VALUES
(1, 'Manager', 1600.00),
(2, 'Cleaner', 1400.00),
(3, 'General Stuff', 1400.00),
(4, 'Reception', 1500.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_invoices`
--

CREATE TABLE `071_invoices` (
  `invoice_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `total_days` int(11) GENERATED ALWAYS AS (to_days(`date_out`) - to_days(`date_in`)) STORED,
  `invoice_status` varchar(20) DEFAULT NULL,
  `invoice_total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_invoices`
--

INSERT INTO `071_invoices` (`invoice_id`, `reservation_id`, `client_id`, `room_id`, `date_in`, `date_out`, `invoice_status`, `invoice_total`) VALUES
(17, 10, 1, 1, '2024-09-15', '2024-09-20', 'paid', 250.00),
(18, 11, 2, 2, '2024-09-18', '2024-09-22', 'unpaid', 200.00),
(19, 12, 3, 3, '2024-09-25', '2024-09-30', 'paid', 250.00),
(20, 13, 4, 4, '2024-10-01', '2024-10-05', 'cancelled', 0.00),
(21, 14, 5, 5, '2024-10-10', '2024-10-15', 'paid', 250.00),
(22, 15, 1, 6, '2024-10-15', '2024-10-20', 'paid', 375.00),
(23, 16, 2, 7, '2024-10-20', '2024-10-25', 'unpaid', 375.00),
(24, 17, 3, 8, '2024-10-25', '2024-10-30', 'paid', 375.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_reports`
--

CREATE TABLE `071_reports` (
  `report_id` int(11) NOT NULL,
  `reservation_id` int(11) NOT NULL,
  `description` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_reports`
--

INSERT INTO `071_reports` (`report_id`, `reservation_id`, `description`) VALUES
(1, 10, 'Break all the stuff in his room');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_reservations`
--

CREATE TABLE `071_reservations` (
  `reservation_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `services` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`services`)),
  `reservation_price_per_day` decimal(10,2) DEFAULT NULL,
  `reservation_state` enum('Booked','Cancelled','Check-In','Check Out') NOT NULL DEFAULT 'Booked'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_reservations`
--

INSERT INTO `071_reservations` (`reservation_id`, `client_id`, `room_id`, `date_in`, `date_out`, `services`, `reservation_price_per_day`, `reservation_state`) VALUES
(10, 1, 1, '2024-09-15', '2024-09-20', '{\"wifi\": true, \"breakfast\": true}', 50.00, 'Booked'),
(11, 2, 2, '2024-09-18', '2024-09-22', '{\"wifi\": true, \"mini_bar\": true}', 50.00, 'Cancelled'),
(12, 3, 3, '2024-09-25', '2024-09-30', '{\"wifi\": true, \"spa\": true}', 50.00, 'Check-In'),
(13, 4, 4, '2024-10-01', '2024-10-05', '{\"wifi\": true, \"tv\": true}', 50.00, 'Cancelled'),
(14, 5, 5, '2024-10-10', '2024-10-15', '{\"wifi\": true, \"desk\": true}', 50.00, 'Booked'),
(15, 6, 6, '2024-10-15', '2024-10-20', '{\"wifi\": true, \"balcony\": true}', 75.00, 'Check Out'),
(16, 7, 7, '2024-10-20', '2024-10-25', '{\"wifi\": true, \"mini_bar\": true}', 75.00, 'Check-In'),
(17, 8, 8, '2024-10-25', '2024-10-30', '{\"wifi\": true, \"spa\": true, \"balcony\": true}', 75.00, 'Check-In');

--
-- Disparadores `071_reservations`
--
DELIMITER $$
CREATE TRIGGER `update_room_state_after_reservation` AFTER UPDATE ON `071_reservations` FOR EACH ROW BEGIN
    -- Cuando la reserva pasa a 'Check-In', la habitación debe marcarse como 'dirty'
    IF NEW.reservation_state = 'Check-In' THEN
        UPDATE 071_rooms 
        SET room_state = 'dirty'
        WHERE room_id = NEW.room_id;
    
    -- Cuando la reserva pasa a 'Check-Out', la habitación debe marcarse como 'clean'
    ELSEIF NEW.reservation_state = 'Check-Out' THEN
        UPDATE 071_rooms 
        SET room_state = 'clean'
        WHERE room_id = NEW.room_id;
    
    -- Cuando la reserva pasa a 'Cancelled', la habitación se marca como 'clean'
    ELSEIF NEW.reservation_state = 'Cancelled' THEN
        UPDATE 071_rooms 
        SET room_state = 'clean'
        WHERE room_id = NEW.room_id;
    END IF;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `update_room_status_after_reservation` AFTER UPDATE ON `071_reservations` FOR EACH ROW BEGIN
    -- Si la reserva es 'Booked', cambia el estado de la habitación a 'on Reservation'
    IF NEW.reservation_state = 'Booked' THEN
        UPDATE 071_rooms
        SET room_state = 'on Reservation'
        WHERE room_id = NEW.room_id;
    
    -- Si la reserva se cancela o el cliente hace check-out, cambia el estado a 'Free'
    ELSEIF NEW.reservation_state = 'Cancelled' OR NEW.reservation_state = 'Check Out' THEN
        UPDATE 071_rooms
        SET room_status = 'Free'
        WHERE room_id = NEW.room_id;
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_rooms`
--

CREATE TABLE `071_rooms` (
  `room_id` int(11) NOT NULL,
  `room_number` int(11) DEFAULT NULL,
  `extras_available` varchar(100) DEFAULT NULL,
  `room_type_id` int(11) DEFAULT NULL,
  `room_state` enum('dirty','clean','broken') NOT NULL DEFAULT 'clean',
  `room_status` enum('Free','on Reservation') NOT NULL DEFAULT 'Free'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_rooms`
--

INSERT INTO `071_rooms` (`room_id`, `room_number`, `extras_available`, `room_type_id`, `room_state`, `room_status`) VALUES
(1, 101, '{\"WiFi\": true, \"TV\": true}', 1, 'dirty', 'on Reservation'),
(2, 102, '{\"WiFi\": true}', 1, 'clean', 'on Reservation'),
(3, 103, '{\"WiFi\": true, \"Desk\": true}', 1, 'dirty', 'on Reservation'),
(4, 104, '{\"WiFi\": true, \"TV\": true, \"Desk\": true}', 1, 'clean', 'Free'),
(5, 105, '{\"WiFi\": true, \"TV\": true}', 1, 'dirty', 'on Reservation'),
(6, 201, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true}', 2, 'dirty', 'Free'),
(7, 202, '{\"WiFi\": true, \"TV\": true}', 2, 'dirty', 'on Reservation'),
(8, 203, '{\"WiFi\": true, \"TV\": true, \"Desk\": true, \"Mini Bar\": true}', 2, 'dirty', 'on Reservation'),
(9, 204, '{\"WiFi\": true, \"TV\": true}', 2, 'clean', 'Free'),
(10, 205, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true}', 2, 'clean', 'Free'),
(11, 301, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true, \"Balcony\": true}', 3, 'clean', 'Free'),
(12, 302, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true}', 3, 'clean', 'Free'),
(13, 303, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true, \"Desk\": true}', 3, 'clean', 'Free'),
(14, 304, '{\"WiFi\": true, \"TV\": true, \"Balcony\": true}', 3, 'clean', 'Free'),
(15, 305, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true, \"Desk\": true}', 3, 'clean', 'Free'),
(16, 401, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true, \"Balcony\": true, \"Spa\": true}', 4, 'clean', 'Free'),
(17, 402, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true}', 4, 'clean', 'Free'),
(18, 403, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true, \"Spa\": true}', 4, 'clean', 'Free'),
(19, 404, '{\"WiFi\": true, \"TV\": true, \"Balcony\": true}', 4, 'clean', 'Free'),
(20, 405, '{\"WiFi\": true, \"TV\": true, \"Mini Bar\": true, \"Balcony\": true, \"Spa\": true}', 4, 'clean', 'Free');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `071_room_type`
--

CREATE TABLE `071_room_type` (
  `room_type_id` int(11) NOT NULL,
  `room_type_name` varchar(50) DEFAULT NULL,
  `room_type_price_per_day` decimal(10,2) DEFAULT NULL,
  `room_type_description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `071_room_type`
--

INSERT INTO `071_room_type` (`room_type_id`, `room_type_name`, `room_type_price_per_day`, `room_type_description`) VALUES
(1, 'Single Room', 50.00, 'A small room with a single bed, ideal for one person.'),
(2, 'Double Room', 75.00, 'A room with a double bed, perfect for couples or two people.'),
(3, 'Suite', 150.00, 'A large room with a separate living area, ideal for families or business travelers.'),
(4, 'Deluxe Room', 120.00, 'A luxurious room with premium amenities and a king-size bed.');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `071_customers`
--
ALTER TABLE `071_customers`
  ADD PRIMARY KEY (`client_id`);

--
-- Indices de la tabla `071_employee`
--
ALTER TABLE `071_employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `employee_position` (`employee_position`);

--
-- Indices de la tabla `071_employee_position`
--
ALTER TABLE `071_employee_position`
  ADD PRIMARY KEY (`position_id`);

--
-- Indices de la tabla `071_invoices`
--
ALTER TABLE `071_invoices`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `reservation_id` (`reservation_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indices de la tabla `071_reports`
--
ALTER TABLE `071_reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `reservation_id` (`reservation_id`);

--
-- Indices de la tabla `071_reservations`
--
ALTER TABLE `071_reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `client_id` (`client_id`),
  ADD KEY `room_id` (`room_id`);

--
-- Indices de la tabla `071_rooms`
--
ALTER TABLE `071_rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `room_type_id` (`room_type_id`);

--
-- Indices de la tabla `071_room_type`
--
ALTER TABLE `071_room_type`
  ADD PRIMARY KEY (`room_type_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `071_customers`
--
ALTER TABLE `071_customers`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `071_employee`
--
ALTER TABLE `071_employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `071_employee_position`
--
ALTER TABLE `071_employee_position`
  MODIFY `position_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `071_invoices`
--
ALTER TABLE `071_invoices`
  MODIFY `invoice_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `071_reports`
--
ALTER TABLE `071_reports`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `071_reservations`
--
ALTER TABLE `071_reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `071_rooms`
--
ALTER TABLE `071_rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de la tabla `071_room_type`
--
ALTER TABLE `071_room_type`
  MODIFY `room_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `071_employee`
--
ALTER TABLE `071_employee`
  ADD CONSTRAINT `071_employee_ibfk_1` FOREIGN KEY (`employee_position`) REFERENCES `071_employee_position` (`position_id`);

--
-- Filtros para la tabla `071_invoices`
--
ALTER TABLE `071_invoices`
  ADD CONSTRAINT `071_invoices_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `071_reservations` (`reservation_id`),
  ADD CONSTRAINT `071_invoices_ibfk_2` FOREIGN KEY (`client_id`) REFERENCES `071_customers` (`client_id`),
  ADD CONSTRAINT `071_invoices_ibfk_3` FOREIGN KEY (`room_id`) REFERENCES `071_rooms` (`room_id`);

--
-- Filtros para la tabla `071_reports`
--
ALTER TABLE `071_reports`
  ADD CONSTRAINT `071_reports_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `071_reservations` (`reservation_id`);

--
-- Filtros para la tabla `071_reservations`
--
ALTER TABLE `071_reservations`
  ADD CONSTRAINT `071_reservations_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `071_customers` (`client_id`),
  ADD CONSTRAINT `071_reservations_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `071_rooms` (`room_id`);

--
-- Filtros para la tabla `071_rooms`
--
ALTER TABLE `071_rooms`
  ADD CONSTRAINT `071_rooms_ibfk_1` FOREIGN KEY (`room_type_id`) REFERENCES `071_room_type` (`room_type_id`);

DELIMITER $$
--
-- Eventos
--
CREATE DEFINER=`root`@`localhost` EVENT `eventRandomReservation` ON SCHEDULE EVERY 1 MINUTE STARTS '2024-09-12 16:28:22' ON COMPLETION NOT PRESERVE ENABLE DO CALL randomReservations(1)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
