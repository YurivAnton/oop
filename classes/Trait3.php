<?php
//46-47
/*
trait Trait3
{
    private function method()
    {
        return 3;
    }
}
*/

//51
//
trait Trait3
{
    use Trait1, Trait2;

    private function method3()
    {
        return 3;
    }
}