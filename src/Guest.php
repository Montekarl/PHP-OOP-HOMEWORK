<?php


namespace Nfq\Academy;


class Guest
{
    private $guest_firstname;
    private $guest_lastname;

    public function __construct(string $guest_firstname, string $guest_lastname)
    {
        $this->guest_firstname = $guest_firstname;
        $this->guest_lastname = $guest_lastname;
    }

    public function __toString():string
    {
        return sprintf('%s %s' , $this->guest_firstname, $this->guest_lastname. PHP_EOL);
    }
}
