<?php
// 10.1
/*
class Employee{
	public $name;
	public $surname;
	public $patronymic;
	public $salary;

	public function __construct($name, $surname, $patronymic, $salary) {
		$this->name = $name;
		$this->surname = $surname;
		$this->$patronymic = $patronymic;
		$this->salary = $salary;
	}
}
 */

// 19.1
/*
require_once 'User.php';
class Employee extends User{
	private $salary;

	public function getSalary() {
		return $this->salary;
	}

	public function setSalary($salary) {
		$this->salary = $salary;
	}
}
 */
//28.3
/*
class Employee{
	private $name;
	private $surname;
	private $post;

	public function __construct($name, $surname, Post $post){
		$this->name = $name;
		$this->surname = $surname;
		$this->post = $post;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getName(){
		return $this->name;
	}

	public function setSurname($surname){
		$this->surname = $surname;
	}

	public function getSurname(){
		return $this->surname;
	}	

	public function getPostName(){
		return $this->post->getName();
	}

	public function getPostSalary(){
		return $this->post->getSalary();
	}

	public function changePost(Post $post){
		$this->post = $post;
	}
}
 */
//35
/*
class Employee extends User
{
	private $salary;

	public function getSalary()
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }

    public function decreaseRevenue($value)
    {
        $this->salary = $this->salary - $value;
    }
}
*/

//40
//
class Employee
{
	private $name;
	private $age;
	private $salary;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}
	
	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getSalary()
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
}
