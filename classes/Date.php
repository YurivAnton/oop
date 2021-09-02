<?php
//54
/*
class Date
{
    public $year;
    public $month;
    public $day;

    public function __get($prop)
    {
        if($prop == 'weekDay')
        {
            $date = $this->day.'-'.$this->month.'-'.$this->year;
            return date('w', strtotime($date));
        }
    }
}
*/

//56
//
class Date
{
	private $date;
	
	private $en = 
		[
		    'month'=>['01'=>'january', '02'=>'february', '03'=>'march', '04'=>'april', '05'=>'may', '06'=>'june', '07'=>'july', '08'=>'august', '09'=>'september', '10'=>'october', '11'=>'november', '12'=>'december'],
		    'day'=>[1=>'monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']
        ];
	
	private $ua = 
		[
		    'month'=>['01'=>'січень', '02'=>'лютий', '03'=>'березень', '04'=>'квітень', '05'=>'травень', '06'=>'червень', '07'=>'липень', '08'=>'серпень', '09'=>'вересень', '10'=>'жовтень', '11'=>'листопад', '12'=>'грудень'],
		    'day'=>[1=>'понеділок', 'вівторок', 'середа', 'четвер', 'пятниця', 'субота', 'неділя']
        ];

    public function __construct($date = null)
	{
		if($date == null)
		{
			$this->date = date('Y-m-d');
		} else {
			$this->date = $date;
		}	
    }

    public function getDay()
	{
		$day = self::explodeDate();
		return $day[2];
    }

    public function getMonth($lang = null)
	{
		$month = self::explodeDate();
		switch ($lang)
		{
            case 'en':
                return $this->en['month'][$month[1]];
            break;
            case 'ua':
                return $this->ua['month'][$month[1]];
            break;
            case null:
                $month = self::explodeDate();
                return $month[1];
            break;
		}
    }

    public function getYear()
    {
        $year = self::explodeDate();
        return $year[0];
    }

    public function getWeekDay($lang = null)
    {
        $weekDay = self::explodeDate();
        $day = date('w', strtotime($this->date));
        switch ($lang)
        {
            case 'en':
                return $this->en['day'][$day];
            break;
            case 'ua':
                return $this->ua['day'][$day];
            break;
            case null :
                return $day;
        }
    }

    public function addDay($value)
    {
        $date = date_create($this->date);
        date_modify($date, "$value day");
        $this->date = date_format($date, 'Y-m-d');
        return $this;
    }

    public function subDay($value)
    {
        $date = date_create($this->date);
        date_modify($date, "-$value day");
        $this->date = date_format($date, 'Y-m-d');
        return $this;
    }

    public function addMonth($value)
    {
        $date = date_create($this->date);
        date_modify($date, "$value month");
        $this->date = date_format($date, 'Y-m-d');
        return $this;
    }

    public function subMonth($value)
    {
        $date = date_create($this->date);
        date_modify($date, "-$value month");
        $this->date = date_format($date, 'Y-m-d');
        return $this;
    }

    public function addYear($value)
    {
        $date = date_create($this->date);
        date_modify($date, "$value year");
        $this->date = date_format($date, 'Y-m-d');
        return $this;
    }

    public function subYear($value)
    {
        $date = date_create($this->date);
        date_modify($date, "-$value year");
        $this->date = date_format($date, 'Y-m-d');
        return $this;
    }

    public function format($format)
    {
        $date = date_create($this->date);
        $this->date = date_format($date, $format);
        return $this;
    }

    public function __toString()
    {
        return $this->date;
    }

    private function explodeDate()
    {
        return explode('-',$this->date);
    }
}
