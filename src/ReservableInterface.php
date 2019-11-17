<?php


namespace Nfq\Academy;

use Nfq\Academy\Reservation;

interface ReservableInterface
{
    public function addReservation(Reservation $reservation);

    public function removeReservartion(Reservation $reservation);

}