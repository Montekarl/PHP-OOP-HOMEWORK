<?php


namespace Nfq\Academy;


class Apartment extends room
{
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
        parent::__construct
        (
            'Diamond Room',
            true,
            true,
            4,
            $roomNumber,
            ['TV', 'air-conditioner', 'refrigerator','kitchen box', 'mini-bar', 'bathtub', 'free Wi-fi'],
            $price
        );
    }
    public function __toString()
    {
        return parent::__toString();
    }
}