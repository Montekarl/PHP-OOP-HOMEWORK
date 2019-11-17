<?php


namespace Nfq\Academy;


class Bedroom extends room
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
            'Gold Room',
            true,
            true,
            2,
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