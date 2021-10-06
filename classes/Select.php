<?php
//78
//
class Select extends Tag
{
	private $options = [];

	public function __construct()
	{
		parent::__construct('select');
	}

	public function add(Option $option)
	{
		$this->options[] = $option;
		return $this;
	}

	public function show()
	{
		$result = $this->open();

        	foreach ($this->options as $option)
        	{
            		$result .= $option;
        	}

        	$result .= $this->close();

        	return $result;
	}

	public function __toString()
	{
		return $this->show();
	}
	 
}
