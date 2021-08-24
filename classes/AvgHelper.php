<?php
// Использование классов внутри других классов
//
class AvgHelper{
    private $sumHelper;

    public function __construct()
    {
        $this->sumHelper = new SumHelper;
    }
    public function getAvg($arr)
    {
        return array_sum($arr) / count($arr);
    }

    public function getMeanSquare($arr)
    {
        return sqrt($this->sumHelper->getSum2($arr));
    }
}