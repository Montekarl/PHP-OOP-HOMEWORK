<?php declare(strict_types=1);

use Nfq\Academy\Guest;
use Nfq\Academy\Reservation;
use Nfq\Academy\SingleRoom;
use Nfq\Academy\BookingManager;

require_once __DIR__ . '/vendor/autoload.php';

$room = new SingleRoom(1408,99);
$guest = new Guest('Vardenis', 'Pavardenis');

$startDate = new \DateTime('2019-04-20');
$endDate = new \DateTime('2019-04-25');
$reservation = new Reservation($startDate, $endDate, $guest);

BookingManager::reserveRoom($room, $reservation);

//BookingManager::bookRoom($room, $reservation); uncomment to test ReservationException