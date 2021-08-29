<?php
//44
//
class Sphere
{
    const PI = 3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getVolume()
    {
        return 4/3 * self::PI * $this->radius * $this->radius * $this->radius;
    }

    public function getSquare()
    {
        return 4 * self::PI * $this->radius * $this->radius;
    }
}