<?php


namespace Nfq\Academy;

use Nfq\Academy\ReservableInterface;

class room implements ReservableInterface
{
    private $roomType;
    private $hasRestroom;
    private $hasBalcony;
    private $bedCount;
    private $roomNumber;
    private $extras;
    private $price;
    private $reservations = [];

    public function __construct
    (
        string $roomType,
        bool $hasRestroom,
        bool $hasBalcony,
        int $bedCount,
        int $roomNumber,
        array $extras,
        float $price
    )
    {
        $this->roomType = $roomType;
        $this->hasRestroom = $hasRestroom;
        $this->hasBalcony = $hasBalcony;
        $this->bedCount = $bedCount;
        $this->roomNumber = $roomNumber;
        $this->extras = $extras;
        $this->price = $price;
    }


    public function getRoomNumber(): int
    {
        return $this->roomNumber;
    }

    public function __toString(): string
    {
        return sprintf('%d bedroom, %s for just about %d per night. Room comes with amenities like: %s. 
        Please collect key number %d at the reception ',
            $this->bedCount,
            $this->roomType,
            $this->price,
            implode(', ', $this->extras),
            $this->roomNumber
        );
    }

    public function addReservation(\Nfq\Academy\Reservation $reservation)
    {
        // TODO: Implement addReservation() method.
    }

    public function removeReservartion(\Nfq\Academy\Reservation $reservation)
    {
        // TODO: Implement removeReservartion() method.
    }
}