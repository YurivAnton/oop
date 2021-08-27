<?php
//43
//
interface iProgrammer
{
	public function __construct($name, $salary);
	public function getName(); 

	public function getSalary(); 

	public function getLangs(); 

	public function addLang($lang);
} 
