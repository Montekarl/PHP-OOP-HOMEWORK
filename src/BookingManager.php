<?php


namespace Nfq\Academy;


class BookingManager
{
    static public function reserveRoom(room $room, Reservation $reservation): void
    {
        $room->addReservation($reservation);

            printf('Room <strong>%d</strong> successfully booked for' .
            '<strong> %s </strong> from <time> %s </time> to <time> %s </time>!' . PHP_EOL,

            $room -> getRoomNumber(),
            $reservation->get_visitor(),
            $reservation->get_StartDate()->format('Y-m-d'),
            $reservation->get_EndDate()->format('Y-m-d')
            );
    }
}

