<?php


namespace Nfq\Academy;


class SingleRoom extends room
{
    public function __construct
    (
        int $roomNumber,
        float $price
    )
    {
        parent::__construct(
            'Standard Room',
            true,
            false,
            1,
            $roomNumber,
            ['TV', 'air-conditioner'],
            $price
        );
    }
    public function __toString(): string
    {
        // kaip isvesti __toString is parent konstruktoriaus?
        return parent::__toString();
    }
}