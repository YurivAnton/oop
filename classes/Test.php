<?php
//46-47
/*
class Test
{
    use Trait1,Trait2,Trait3
    {
        Trait1::method insteadof Trait2;
        Trait1::method insteadof Trait3;
        Trait2::method as method2;
        Trait3::method as method3;
    }

    public function getSum()
    {
        return $this->method() + $this->method2() + $this->method3();
    }
}
*/

//51
//
class Test
{
    use Trait3;

    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3();
    }
}