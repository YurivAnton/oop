<?php
// 35
//
abstract class Figure
{
    abstract public function getSquare();
    abstract public function getPerimeter();

    public function getSquarePerimeterSum()
    {
        return $this->getPerimeter() + $this->getSquare();
    }
}
