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
		['month'=>['01'=>'january', '02'=>'february', '03'=>'march', '04'=>'april', '05'=>'may', '06'=>'june', '07'=>'july', '08'=>'august', '09'=>'september', '10'=>'october', '11'=>'november', '12'=>'december'], 
		'day'=>[1=>'monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday']];
	
	private $ua = 
		['month'=>['01'=>'січень', '02'=>'лютий', '03'=>'березень', '04'=>'квітень', '05'=>'травень', '06'=>'червень', '07'=>'липень', '08'=>'серпень', '09'=>'вересень', '10'=>'жовтень', '11'=>'листопад', '12'=>'грудень'], 
		'day'=>[1=>'понеділок', 'вівторок', 'середа', 'четвер', 'пятниця', 'субота', 'неділя']];

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
	/*	$en = ['01'=>'january', '02'=>'february', '03'=>'march', '04'=>'april', '05'=>'may', '06'=>'june', '07'=>'july', '08'=>'august', '09'=>'september', '10'=>'october', '11'=>'november', '12'=>'december'];
		
	$ua = ['01'=>'січень', '02'=>'лютий', '03'=>'березень', '04'=>'квітень', '05'=>'травень', '06'=>'червень', '07'=>'липень', '08'=>'серпень', '09'=>'вересень', '10'=>'жовтень', '11'=>'листопад', '12'=>'грудень'];*/
	
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
		switch ($lang
        // возвращает день недели

        // переменная $lang может принимать значение ru или en
        // если эта не пуста - пусть месяц будет словом на заданном языке
    	}

    public function addDay($value)
    {
        // добавляет значение $value к дню
    }

    public function subDay($value)
    {
        // отнимает значение $value от дня
    }

    public function addMonth($value)
    {
        // добавляет значение $value к месяцу
    }

    public function subMonth($value)
    {
        // отнимает значение $value от месяца
    }

    public function addYear($value)
    {
        // добавляет значение $value к году
    }

    public function subYear($value)
    {
        // отнимает значение $value от года
    }

    public function format($format)
    {
        // выведет дату в указанном формате
        // формат пусть будет такой же, как в функции date
    }

    public function __toString()
    {
        // выведет дату в формате 'год-месяц-день'
    }

    private function explodeDate()
    {
	    return explode('-',$this->date);
    }
}
