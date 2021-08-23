<?php
//32
//
class Circle
{
	const PI = 3.14;
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getSquare()
	{
		return self::PI * $this->radius * $this->radius;
	}

	public function getCircuit()
	{
		return 2 * self::PI * $this->radius;
	}
}

$circle = new Circle(10);

echo $circle->getSquare();
echo '<br>';
echo $circle->getCircuit();
echo '<br>';
echo get_class($circle);
