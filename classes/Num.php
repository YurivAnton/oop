<?php
/*
30.1
class Num
{
	public static $num1;
	public static $num2;
}
 */
//30.2-30.3
//
class Num
{
	private static $num1=2;
	private static $num2=3;

	public static function getSum()
	{
		echo self::$num1 + self::$num2;
	}
}
