<?php
//57
//
class Interval
{
    private $date1;
    private $date2;

    public function __construct(Date $date1, Date $date2)
    {
        $this->date1 = $date1;
        $this->date2 = $date2;
    }

    public function toDays()
    {
        return self::seconds() / 3600 / 24;
    }

    public function toMonths()
    {
        return floor(self::toDays() / 30);
        // вернет разницу в месяцах
    }

    public function toYears()
    {
        return floor(self::toMonths() / 12);
        // вернет разницу в годах
    }

    private function seconds()
    {
        return strtotime($this->date1) - strtotime($this->date2);
    }
}