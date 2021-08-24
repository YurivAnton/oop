<?php
// 21.1 - 12.2
/*
class Student{
	private $name;
	private $course;

	public function __construct($name) {
		$this->name = $name;
		$this->course = 1;
	}

	public function getName() {
		return $this->name;
	}

	public function getCourse() {
		return $this->course;
	}

	public function transferToNextCourse() {
		$this->course++;
	}
}

$student = new Student('anton');
echo $student->getCourse();
echo '<br>';
echo $student->transferToNextCourse();
echo $student->getCourse();
 */


// 19.2
/*
class Student extends User{
	private $course;

	public function getCourse() {
		return $this->course;
	}

	public function setCourse($course) {
		$this->course = $course;
	}
} 
 */

//35
//
class Student extends User
{
	private $scholarship;

	public function getScholarship()
	{
		return $this->scholarship;
	}

	public function setScholarship($scholarship)
	{
		$this->scholarship = $scholarship;
	}

	public function increaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value;
    }

    public function decreaseRevenue($value)
    {
        $this->scholarship = $this->scholarship - $value;
    }
}
