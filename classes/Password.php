<?php
//74
//
class Password extends Input
{
	public function __construct()
	{
		$this->setAttr('type', 'password');	
		parent::__construct('input');
	}
}
