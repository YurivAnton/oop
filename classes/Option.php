<?php
//78
//
class Option extends Tag
{
	public function __construct()
        {
		parent::__construct('option');
	}

	public function setSelected()
	{
		$this->setAttr('selected');
		return $this;
	}
	
	public function __toString()
	{
		return parent::show();
	}
}
