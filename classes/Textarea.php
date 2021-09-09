<?php
//74
//
class Textarea extends Tag
{
	public function __construct()
	{
		parent::__construct('textarea');
	}

	public function __toString()
	{
		return parent::show();
	}
}
