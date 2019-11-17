<?php


namespace Nfq\Academy;

use DateTime;

class Reservation
{
    private $startDate;
    private $endDate;
    private $guest;

    public function __construct(DateTime $startDate, DateTime $endDate, Guest $guest)
    {
        $this->guest = $guest;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }

    public function get_StartDate(): DateTime
    {
        return $this->startDate;
    }


    public function get_EndDate(): DateTime
    {
        return $this->endDate;
    }

    public function get_visitor(): String
    {
        return $this->guest;
    }

    public function __toString(): String
    {
        return sprintf('%s %s %s',
            $this->guest,
            $this->startDate->format('Y-m-d'),
            $this->endDate->format('Y-m-d'));
    }

}

