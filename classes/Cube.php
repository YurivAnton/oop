<?php
//39
/*
class Cube implements iCube
{
	private $a;

	public function __construct($a)
	{
		$this->a = $a;
	}

	public function getVolume()
	{
		return $this->a * $this->a * $this->a;
	}

	public function getSquare()
	{
		return $this->a * $this->a;
	}
}
*/

//41
//
class Cube implements iFigure3d
{
    private $a;

    public function __construct($a)
    {
        $this->a = $a;
    }

    public function getVolume()
    {
        return $this->a * $this->a *$this->a;
    }

    public function getSurfaceSquare()
    {
        return $this->a * $this->a;
    }
}
