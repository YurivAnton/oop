<?php
//36
/*
class Disk implements iFigure
{
	const PI=3.14;

	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getSquare()
	{
		return self::PI * $this->radius * $this->radius;
	}

	public function getPerimeter()
	{
		return 2 * self::PI * $this->radius;
	}
}
 */

//42
//
class Disk implements iFigure, iDisk
{
    const PI = 3.14;
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getDiameter()
    {
        return 2 * $this->radius;
    }

    public function getSquare()
    {
        return self::PI * $this->radius * $this->radius;
    }

    public function getPerimeter()
    {
        return 2 * self::PI * $this->radius;
    }
}